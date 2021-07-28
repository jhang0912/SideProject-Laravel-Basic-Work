<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;

class ExampleTest extends DuskTestCase
{
    protected function driver()
    {
        $options = (new ChromeOptions)->addArguments([
            // '--disable-gpu'
            // '--headless'
        ]);

        return RemoteWebDriver::create(
            'http://localhost:9515',
            DesiredCapabilities::chrome()->setCapability(
                ChromeOptions::CAPABILITY,
                $options
            )
        );
    }
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->maximize()
                ->visit('/home')
                ->assertSee('Ragnarok Online Card Store')
                ->pause(1000)
                ->click('@share-short-url-link')
                ->pause(1000)
                ->click('@copy-button')
                ->pause(1000)
                ->acceptDialog()
                ->pause(1000)
                ->click('@notification-link')
                ->pause(1000)
                ->click('@new-notification_0')
                ->waitFor('@readed-notification')
                ->pause(1000)
                ->click('@admin-link')
                ->pause(1000)
                ->scrollIntoView('@page_2')
                ->pause(1000)
                ->click('@page_2')
                ->pause(1000)
                ->click('@order-link')
                ->pause(1000)
                ->click('@order_0')
                ->waitFor('@order_content_0')
                ->pause(1000);
            eval(\Psy\sh());
        });
    }
}
