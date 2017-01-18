<?php

namespace Tests\Strime\Slackify\Unit;

class TestCase extends \PHPUnit_Framework_TestCase
{
    public function assertScalar($value)
    {
        $this->assertTrue(is_scalar($value));
    }

    public function getLoggerMock()
    {
        return $this->getMock('Psr\Log\LoggerInterface');
    }

    public function getCacheMock()
    {
        return $this->getMock('Doctrine\Common\Cache\Cache');
    }

    public function getWebhookMock($url = null)
    {
        $webhook = $this->getMockBuilder('Strime\Slackify\Webhooks\Webhook')
            ->disableOriginalConstructor()
            ->getMock();

        $webhook->expects($this->any())
            ->method('getUrl')
            ->will($this->returnValue($url));

        return $webhook;
    }
}