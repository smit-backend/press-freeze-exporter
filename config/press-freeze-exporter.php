<?php

return [
    'enabled' => env('PRESS_FREEZE_EXPORTER_ENABLED', true),
    'timeout' => env('PRESS_FREEZE_EXPORTER_TIMEOUT', 30),
    'log_channel' => env('PRESS_FREEZE_EXPORTER_LOG', 'stack'),
];
