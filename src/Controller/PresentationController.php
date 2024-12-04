<?php declare(strict_types=1);

namespace Neusta\Pimcore\PresentationBundle\Controller;

use Neusta\Pimcore\PresentationBundle\Renderer\PresentationRenderer;
use Pimcore\Controller\FrontendController;
use Pimcore\Model\Document\PageSnippet;
use Symfony\Component\HttpFoundation\Response;

class PresentationController extends FrontendController
{
    public function __construct(private readonly PresentationRenderer $presentationRenderer)
    {
    }

    public function presentationAction(): Response
    {
        $slidesMarkup = '';
        if ($this->document instanceof PageSnippet) {
            $slidesMarkup = $this->presentationRenderer->renderPresentation($this->document);
        }

        return $this->render('@NeustaPimcorePresentation/Presentation/presentation.html.twig', [
            'slidesMarkup' => $slidesMarkup,
        ]);
    }
}
