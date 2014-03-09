<?php

namespace Intranet\IntraBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class IntranetIntraBundle extends Bundle
{
    public function getParent()
    {
    	return 'FOSUserBundle';
    }

}
