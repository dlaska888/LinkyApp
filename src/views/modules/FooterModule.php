<?php

namespace modules;

class FooterModule
{
    public static function render(): string
    {
        $homeIcon = IconModule::render('home');
        $shareIcon = IconModule::render('share');

        return
            <<<HTML
            <footer class="flex bg-secondary hide-desktop hide-on-scroll">
              <div class="footer-container flex">
                 <button id="btn-mobile-home" class="page-home btn-container btn-footer btn-page active">
                     {$homeIcon}
                 </button>
                 <button id="btn-mobile-shared" class="page-shared btn-container btn-footer btn-page">
                     {$shareIcon}
                 </button>
              </div>
           </footer>
        HTML;
    }
}