<?php

namespace Repertoire\Models\Constants;

abstract class EloquentDates
{
    /**
     * The name of the "archived_at" column.
     *
     * @var string
     */
    const ARCHIVED_AT = 'archived_at';

    /**
     * The name of the "deleted_at" column.
     *
     * @var string
     */
    const DELETED_AT = 'deleted_at';

    /**
     * The name of the "disabled_at" column.
     *
     * @var string
     */
    const DISABLED_AT = 'disabled_at';

    /**
     * The name of the "established_at" column.
     *
     * @var string
     */
    const ESTABLISHED_AT = 'established_at';
}