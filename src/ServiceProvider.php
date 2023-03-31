<?php

declare(strict_types=1);

namespace PreemStudio\BladeIconicPro;

use PreemStudio\BladeIcons\Facades\IconFamilyRegistry;
use PreemStudio\BladeIcons\IconFamily;
use PreemStudio\BladeIcons\IconFamilyStyle;
use PreemStudio\Jetpack\Package\AbstractServiceProvider;

final class ServiceProvider extends AbstractServiceProvider
{
    public function packageRegistered(): void
    {
        IconFamilyRegistry::push(
            new IconFamily('iconic-pro', [
                new IconFamilyStyle('default', base_path('resources/icons/iconic-pro')),
            ]),
        );
    }
}
