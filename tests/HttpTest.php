<?php 

class HttpTest extends TestCase {

    /** @test * */
    public function it_should_allow_you_to_send_http_requests()
    {
        Http::shouldReceive('get')->once()->andReturn('foo');
    }

} 