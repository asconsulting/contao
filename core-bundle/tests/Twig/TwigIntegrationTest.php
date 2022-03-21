<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\CoreBundle\Tests\Twig;

use Contao\Config;
use Contao\CoreBundle\Tests\TestCase;
use Contao\CoreBundle\Twig\Extension\ContaoExtension;
use Contao\CoreBundle\Twig\Inheritance\TemplateHierarchyInterface;
use Contao\CoreBundle\Twig\Interop\ContextFactory;
use Contao\FormTextField;
use Contao\System;
use Contao\TemplateLoader;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Path;
use Twig\Environment;
use Twig\Loader\ArrayLoader;

class TwigIntegrationTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        (new Filesystem())->mkdir(Path::join($this->getTempDir(), 'templates'));

        $GLOBALS['TL_FFL'] = [
            'text' => FormTextField::class,
        ];

        $GLOBALS['TL_LANG']['MSC'] = [
            'mandatory' => 'mandatory',
            'global' => 'global',
        ];
    }

    protected function tearDown(): void
    {
        (new Filesystem())->remove(Path::join($this->getTempDir(), 'templates'));

        TemplateLoader::reset();

        unset($GLOBALS['TL_LANG'], $GLOBALS['TL_FFL'], $GLOBALS['TL_MIME']);

        $this->resetStaticProperties([System::class, Config::class]);

        parent::tearDown();
    }

    public function testRendersWidgets(): void
    {
        $content = "{{ strClass }}\n{{ strLabel }} {{ this.label }}\n {{ getErrorAsString }}";

        // Setup legacy framework and environment
        (new Filesystem())->touch(Path::join($this->getTempDir(), 'templates/form_textfield.html5'));
        TemplateLoader::addFile('form_textfield', 'templates');

        $environment = new Environment(new ArrayLoader(['@Contao/form_textfield.html.twig' => $content]));
        $environment->addExtension(new ContaoExtension($environment, $this->createMock(TemplateHierarchyInterface::class)));

        $container = $this->getContainerWithContaoConfiguration($this->getTempDir());
        $container->set('twig', $environment);
        $container->set(ContextFactory::class, new ContextFactory());

        System::setContainer($container);

        // Render widget
        $textField = new FormTextField(['class' => 'my_class', 'label' => 'foo']);
        $textField->addError('bar');

        $this->assertSame("my_class error\nfoo foo\n bar", $textField->parse());
    }

    public function testRendersAttributes(): void
    {
        $templateContent = <<<'TEMPLATE'
            <div{{ attrs(attributes).addClass('foo').mergeWith(cssId) }}>
              <h1{{ attrs() }}>
                <span{{ attrs({'data-x': 'y'}).setIfExists('style', style).set('data-bar', 'bar') }}>{{ headline }}</span>
              </h1>
              <p{{ attrs(paragraph_attributes) }}>{{ text }}</p>
            </div>
            TEMPLATE;

        $expectedOutput = <<<'TEMPLATE'
            <div class="block foo" data-thing="42" id="my-id">
              <h1>
                <span data-x="y" data-bar="bar">Test headline</span>
              </h1>
              <p class="rte">Some text</p>
            </div>
            TEMPLATE;

        $environment = new Environment(new ArrayLoader(['test.html.twig' => $templateContent]));
        $environment->addExtension(new ContaoExtension($environment, $this->createMock(TemplateHierarchyInterface::class)));

        $output = $environment->render(
            'test.html.twig',
            [
                'attributes' => ['class' => 'block', 'data-thing' => 42],
                'cssId' => ' id="my-id"',
                'paragraph_attributes' => ' class="rte"',
                'style' => '',
                'headline' => 'Test headline',
                'text' => 'Some text',
            ]
        );

        $this->assertSame($expectedOutput, $output);
    }
}