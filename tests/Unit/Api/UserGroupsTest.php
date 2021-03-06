<?php

namespace Tests\Strime\Slackify\Unit\Api;

use Strime\Slackify\Api\UserGroups;
use Strime\Slackify\Exception\InvalidArgumentException;
use Strime\Slackify\Exception\RuntimeException;

class UserGroupsTest extends AbstractApiTestCase
{
    public function testCreateWithWrongParametersReturnsException()
    {
        $api = $this->getApiUserGroupsMock('api-token');

        $failure = new InvalidArgumentException('Failed to send the message.');
        $api->expects($this->once())
            ->method('create')
            ->with(array(), array())
            ->will($this->throwException($failure));

        $this->setExpectedException('Strime\Slackify\Exception\InvalidArgumentException');
        $api->create(array(), array());
    }

    public function testCreateRequestShouldReturnJsonObject()
    {
        $api = $this->getApiUserGroupsMock('api-token');

        $api->expects($this->once())
            ->method('create')
            ->with("foo", "bar", "pouet", "C12345,C67890", FALSE)
            ->will($this->returnValue("json"));

        $api->create("foo", "bar", "pouet", "C12345,C67890", FALSE);
    }

    public function testDisableWithWrongParametersReturnsException()
    {
        $api = $this->getApiUserGroupsMock('api-token');

        $failure = new InvalidArgumentException('Failed to send the message.');
        $api->expects($this->once())
            ->method('disable')
            ->with(array())
            ->will($this->throwException($failure));

        $this->setExpectedException('Strime\Slackify\Exception\InvalidArgumentException');
        $api->disable(array());
    }

    public function testDisableRequestShouldReturnJsonObject()
    {
        $api = $this->getApiUserGroupsMock('api-token');

        $api->expects($this->once())
            ->method('disable')
            ->with("Ug12345", TRUE)
            ->will($this->returnValue("json"));

        $api->disable("Ug12345", TRUE);
    }

    public function testEnableWithWrongParametersReturnsException()
    {
        $api = $this->getApiUserGroupsMock('api-token');

        $failure = new InvalidArgumentException('Failed to send the message.');
        $api->expects($this->once())
            ->method('enable')
            ->with(array())
            ->will($this->throwException($failure));

        $this->setExpectedException('Strime\Slackify\Exception\InvalidArgumentException');
        $api->enable(array());
    }

    public function testEnableRequestShouldReturnJsonObject()
    {
        $api = $this->getApiUserGroupsMock('api-token');

        $api->expects($this->once())
            ->method('enable')
            ->with("Ug12345", TRUE)
            ->will($this->returnValue("json"));

        $api->enable("Ug12345", TRUE);
    }

    public function testListWithWrongParametersReturnsException()
    {
        $api = $this->getApiUserGroupsMock('api-token');

        $failure = new InvalidArgumentException('Failed to send the message.');
        $api->expects($this->once())
            ->method('list_usergroups')
            ->with(array(), array(), array())
            ->will($this->throwException($failure));

        $this->setExpectedException('Strime\Slackify\Exception\InvalidArgumentException');
        $api->list_usergroups(array(), array(), array());
    }

    public function testListRequestShouldReturnJsonObject()
    {
        $api = $this->getApiUserGroupsMock('api-token');

        $api->expects($this->once())
            ->method('list_usergroups')
            ->with(TRUE, FALSE, TRUE)
            ->will($this->returnValue("json"));

        $api->list_usergroups(TRUE, FALSE, TRUE);
    }

    public function testUpdateWithWrongParametersReturnsException()
    {
        $api = $this->getApiUserGroupsMock('api-token');

        $failure = new InvalidArgumentException('Failed to send the message.');
        $api->expects($this->once())
            ->method('update')
            ->with(array(), array(), array(), array())
            ->will($this->throwException($failure));

        $this->setExpectedException('Strime\Slackify\Exception\InvalidArgumentException');
        $api->update(array(), array(), array(), array());
    }

    public function testUpdateRequestShouldReturnJsonObject()
    {
        $api = $this->getApiUserGroupsMock('api-token');

        $api->expects($this->once())
            ->method('update')
            ->with("Ug12345", "foo", "bar", NULL, NULL, TRUE)
            ->will($this->returnValue("json"));

        $api->update("Ug12345", "foo", "bar", NULL, NULL, TRUE);
    }

    public function testUsersListWithWrongParametersReturnsException()
    {
        $api = $this->getApiUserGroupsMock('api-token');

        $failure = new InvalidArgumentException('Failed to send the message.');
        $api->expects($this->once())
            ->method('usersList')
            ->with(array(), array())
            ->will($this->throwException($failure));

        $this->setExpectedException('Strime\Slackify\Exception\InvalidArgumentException');
        $api->usersList(array(), array());
    }

    public function testUsersListRequestShouldReturnJsonObject()
    {
        $api = $this->getApiUserGroupsMock('api-token');

        $api->expects($this->once())
            ->method('usersList')
            ->with("Ug12345", TRUE)
            ->will($this->returnValue("json"));

        $api->usersList("Ug12345", TRUE);
    }

    public function testUsersUpdateWithWrongParametersReturnsException()
    {
        $api = $this->getApiUserGroupsMock('api-token');

        $failure = new InvalidArgumentException('Failed to send the message.');
        $api->expects($this->once())
            ->method('usersUpdate')
            ->with(array(), array())
            ->will($this->throwException($failure));

        $this->setExpectedException('Strime\Slackify\Exception\InvalidArgumentException');
        $api->usersUpdate(array(), array());
    }

    public function testUsersUpdateRequestShouldReturnJsonObject()
    {
        $api = $this->getApiUserGroupsMock('api-token');

        $api->expects($this->once())
            ->method('usersUpdate')
            ->with("Ug12345", "U12345,U67890", TRUE)
            ->will($this->returnValue("json"));

        $api->usersUpdate("Ug12345", "U12345,U67890", TRUE);
    }
}
