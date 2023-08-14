<?php

namespace WireUi\Traits\Components;

use Exception;

trait HasSetupAlign
{
    public mixed $align = null;

    public mixed $alignClasses = null;

    protected mixed $alignResolve = null;

    protected function setAlignResolve(string $class): void
    {
        $this->alignResolve = $class;
    }

    protected function setupAlign(array &$component): void
    {
        throw_if(!$this->alignResolve, new Exception('You must define a align resolve.'));

        $aligns = config("wireui.{$this->config}.aligns");

        $alignPack = $this->getResolve($aligns, 'align');

        $this->align = $this->getData('align');

        $this->alignClasses = $alignPack->get($this->align);

        $this->setAlignVariables($component);
    }

    private function setAlignVariables(array &$component): void
    {
        $component['align'] = $this->align;

        $component['alignClasses'] = $this->alignClasses;
    }
}
