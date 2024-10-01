<?php

declare(strict_types=1);

namespace Nofrixion\Scope;

class Scope
{
    /** @var string Nofrixion scope */
    const NOFRIXION = 'nofrixion';

    /** @var string offline access scope - required to be able to use refresh_token */
    const OFFLINE_ACCESS = 'offline_access';

    /** @var string openid scope */
    const OPENID = 'openid';
}
