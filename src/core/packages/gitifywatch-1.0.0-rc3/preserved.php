<?php return array (
  '5b0ffb0e0eb597b8076b9276dec3f366' => 
  array (
    'criteria' => 
    array (
      'name' => 'gitifywatch',
    ),
    'object' => 
    array (
      'name' => 'gitifywatch',
      'path' => '{core_path}components/gitifywatch/',
      'assets_path' => '',
    ),
  ),
  '92ae19d192f96727da8ede02eca25cf2' => 
  array (
    'criteria' => 
    array (
      'key' => 'gitifywatch.repository_path',
    ),
    'object' => 
    array (
      'key' => 'gitifywatch.repository_path',
      'value' => '{base_path}',
      'xtype' => 'textfield',
      'namespace' => 'gitifywatch',
      'area' => 'Gitify',
      'editedon' => NULL,
    ),
  ),
  '62c8e1cf9bb9771db322704c85142dd9' => 
  array (
    'criteria' => 
    array (
      'key' => 'gitifywatch.gitify_path',
    ),
    'object' => 
    array (
      'key' => 'gitifywatch.gitify_path',
      'value' => '{base_path}Gitify/',
      'xtype' => 'textfield',
      'namespace' => 'gitifywatch',
      'area' => 'Gitify',
      'editedon' => NULL,
    ),
  ),
  'c254597b7b70ed48d13aeb2688670f2b' => 
  array (
    'criteria' => 
    array (
      'category' => 'Gitify Watch',
    ),
    'object' => 
    array (
      'id' => 40,
      'parent' => 0,
      'category' => 'Gitify Watch',
      'rank' => 0,
    ),
  ),
  'c7de3f021c2bc56c02d32ddbf9727e55' => 
  array (
    'criteria' => 
    array (
      'name' => 'GitifyWatch',
    ),
    'object' => 
    array (
      'id' => 27,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'GitifyWatch',
      'description' => 'Watches for changes in resources and elements to automatically run Gitify and git to commit & push changes.',
      'editor_type' => 0,
      'category' => 40,
      'cache_type' => 0,
      'plugincode' => '/**
 * @var modX $modx
 * @var array $scriptProperties
 * @var GitifyWatch $gitifywatch
 */

use mhwd\\GitifyWatch;

$path = $modx->getOption(\'gitifywatch.core_path\', null, MODX_CORE_PATH  . \'components/gitifywatch/\', true);
require_once($path . \'model/gitifywatch/gitifywatch.class.php\');
$gitifywatch = $modx->getService(\'gitifywatch\', \'mhwd\\GitifyWatch\', $path . \'model/gitifywatch/\');

if (!$gitifywatch) {
    $modx->log(modX::LOG_LEVEL_ERROR, \'Could not load gitifywatch service from \' . $path);
    return;
}

$path = $modx->getOption(\'scheduler.core_path\', null, $modx->getOption(\'core_path\') . \'components/scheduler/\');
$scheduler = $modx->getService(\'scheduler\', \'Scheduler\', $path . \'model/scheduler/\');
if (!$scheduler) {
    $modx->log(modX::LOG_LEVEL_ERROR, \'Could not load Scheduler service from \' . $path);
    return;
}

$environment = $gitifywatch->getEnvironment();
$trigger = false;
$username = ($modx->user) ? $modx->user->get(\'username\') : \'Anonymous\';

if (!$environment || !$environment[\'auto_commit_and_push\']) {
    $modx->log(modX::LOG_LEVEL_WARN, \'[GitifyWatch] Not allowed to commit and push on this environment: \' . print_r($environment, true), \'\', \'GitifyWatch plugin\', __FILE__, __LINE__);
    return;
}

switch ($modx->event->name) {
    case \'OnDocFormSave\':
        /**
         * @var int $mode
         * @var modResource $resource
         */
        $trigger = array(
            \'username\' => $username,
            \'mode\' => ($mode === modSystemEvent::MODE_NEW) ? \'created\' : \'edited\',
            \'target\' => $resource->get(\'pagetitle\'),
            \'partition\' => $environment[\'partitions\'][\'modResource\'],
        );
        break;

    case \'OnTempFormSave\':
        /**
         * @var int $mode
         * @var modTemplate $template
         */
        $trigger = array(
            \'username\' => $username,
            \'mode\' => ($mode === modSystemEvent::MODE_NEW) ? \'created\' : \'edited\',
            \'target\' => $template->get(\'templatename\'),
            \'partition\' => $environment[\'partitions\'][\'modTemplate\'],
        );
        break;

    case \'OnTempFormDelete\':
        /**
         * @var modTemplate $template
         */
        $trigger = array(
            \'username\' => $username,
            \'mode\' => \'deleted\',
            \'target\' => $template->get(\'templatename\'),
            \'partition\' => $environment[\'partitions\'][\'modTemplate\'],
        );
        break;

    case \'OnTVFormSave\':
        /**
         * @var int $mode
         * @var modTemplateVar $tv
         */
        $trigger = array(
            \'username\' => $username,
            \'mode\' => ($mode === modSystemEvent::MODE_NEW) ? \'created\' : \'edited\',
            \'target\' => $tv->get(\'name\'),
            \'partition\' => $environment[\'partitions\'][\'modTemplateVar\'],
        );
        break;
    case \'OnTVFormDelete\':
        /**
         * @var modTemplateVar $tv
         */
        $trigger = array(
            \'username\' => $username,
            \'mode\' => \'deleted\',
            \'target\' => $tv->get(\'name\'),
            \'partition\' => $environment[\'partitions\'][\'modTemplateVar\'],
        );
        break;

    case \'OnChunkFormSave\':
        /**
         * @var int $mode
         * @var modChunk $chunk
         */
        $trigger = array(
            \'username\' => $username,
            \'mode\' => ($mode === modSystemEvent::MODE_NEW) ? \'created\' : \'edited\',
            \'target\' => $chunk->get(\'name\'),
            \'partition\' => $environment[\'partitions\'][\'modChunk\'],
        );
        break;
    case \'OnChunkFormDelete\':
        /**
         * @var modChunk $chunk
         */
        $trigger = array(
            \'username\' => $username,
            \'mode\' => \'deleted\',
            \'target\' => $chunk->get(\'name\'),
            \'partition\' => $environment[\'partitions\'][\'modChunk\'],
        );
        break;
    
    case \'OnSnipFormSave\':
        /**
         * @var int $mode
         * @var modSnippet $snippet
         */
        $trigger = array(
            \'username\' => $username,
            \'mode\' => ($mode === modSystemEvent::MODE_NEW) ? \'created\' : \'edited\',
            \'target\' => $snippet->get(\'name\'),
            \'partition\' => $environment[\'partitions\'][\'modSnippet\'],
        );
        break;
    case \'OnSnipFormDelete\':
        /**
         * @var modSnippet $snippet
         */
        $trigger = array(
            \'username\' => $username,
            \'mode\' => \'deleted\',
            \'target\' => $snippet->get(\'name\'),
            \'partition\' => $environment[\'partitions\'][\'modSnippet\'],
        );
        break;
    case \'OnPluginFormSave\':
        /**
         * @var int $mode
         * @var modPlugin $plugin
         */
        $trigger = array(
            \'username\' => $username,
            \'mode\' => ($mode === modSystemEvent::MODE_NEW) ? \'created\' : \'edited\',
            \'target\' => $plugin->get(\'name\'),
            \'partition\' => $environment[\'partitions\'][\'modPlugin\'],
        );
        break;
    case \'OnPluginFormDelete\':
        /**
         * @var modPlugin $plugin
         */
        $trigger = array(
            \'username\' => $username,
            \'mode\' => \'deleted\',
            \'target\' => $plugin->get(\'name\'),
            \'partition\' => $environment[\'partitions\'][\'modPlugin\'],
        );
        break;
}

if ($trigger) {
    /** @var sTask $task */
    $task = $scheduler->getTask(\'gitifywatch\', \'extract\');
    if ($task instanceof sTask) {
        // Try to find one already scheduled
        $run = $modx->getObject(\'sTaskRun\', array(
            \'task\' => $task->get(\'id\'),
            \'status\' => sTaskRun::STATUS_SCHEDULED,
        ));

        if ($run instanceof sTaskRun) {
            $data = $run->get(\'data\');
            $data[\'triggers\'][] = $trigger;
            $run->set(\'data\', $data);
            $run->save();
        } else {
            $commitDelay = isset($environment[\'commit_delay\']) ? $environment[\'commit_delay\'] : \'instant\';
            if ($commitDelay == \'instant\') {
                $time = time() - 60;
            }
            else {
                $time = time() + ($commitDelay * 60);
            }

            $task->schedule($time, array(
                \'triggers\' => array($trigger),
            ));
        }
    }
    else {
        $modx->log(modX::LOG_LEVEL_ERROR, \'Could not find sTask gitifywatch:extract\');
    }
}',
      'locked' => 0,
      'properties' => NULL,
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * @var modX $modx
 * @var array $scriptProperties
 * @var GitifyWatch $gitifywatch
 */

use mhwd\\GitifyWatch;

$path = $modx->getOption(\'gitifywatch.core_path\', null, MODX_CORE_PATH  . \'components/gitifywatch/\', true);
require_once($path . \'model/gitifywatch/gitifywatch.class.php\');
$gitifywatch = $modx->getService(\'gitifywatch\', \'mhwd\\GitifyWatch\', $path . \'model/gitifywatch/\');

if (!$gitifywatch) {
    $modx->log(modX::LOG_LEVEL_ERROR, \'Could not load gitifywatch service from \' . $path);
    return;
}

$path = $modx->getOption(\'scheduler.core_path\', null, $modx->getOption(\'core_path\') . \'components/scheduler/\');
$scheduler = $modx->getService(\'scheduler\', \'Scheduler\', $path . \'model/scheduler/\');
if (!$scheduler) {
    $modx->log(modX::LOG_LEVEL_ERROR, \'Could not load Scheduler service from \' . $path);
    return;
}

$environment = $gitifywatch->getEnvironment();
$trigger = false;
$username = ($modx->user) ? $modx->user->get(\'username\') : \'Anonymous\';

if (!$environment || !$environment[\'auto_commit_and_push\']) {
    $modx->log(modX::LOG_LEVEL_WARN, \'[GitifyWatch] Not allowed to commit and push on this environment: \' . print_r($environment, true), \'\', \'GitifyWatch plugin\', __FILE__, __LINE__);
    return;
}

switch ($modx->event->name) {
    case \'OnDocFormSave\':
        /**
         * @var int $mode
         * @var modResource $resource
         */
        $trigger = array(
            \'username\' => $username,
            \'mode\' => ($mode === modSystemEvent::MODE_NEW) ? \'created\' : \'edited\',
            \'target\' => $resource->get(\'pagetitle\'),
            \'partition\' => $environment[\'partitions\'][\'modResource\'],
        );
        break;

    case \'OnTempFormSave\':
        /**
         * @var int $mode
         * @var modTemplate $template
         */
        $trigger = array(
            \'username\' => $username,
            \'mode\' => ($mode === modSystemEvent::MODE_NEW) ? \'created\' : \'edited\',
            \'target\' => $template->get(\'templatename\'),
            \'partition\' => $environment[\'partitions\'][\'modTemplate\'],
        );
        break;

    case \'OnTempFormDelete\':
        /**
         * @var modTemplate $template
         */
        $trigger = array(
            \'username\' => $username,
            \'mode\' => \'deleted\',
            \'target\' => $template->get(\'templatename\'),
            \'partition\' => $environment[\'partitions\'][\'modTemplate\'],
        );
        break;

    case \'OnTVFormSave\':
        /**
         * @var int $mode
         * @var modTemplateVar $tv
         */
        $trigger = array(
            \'username\' => $username,
            \'mode\' => ($mode === modSystemEvent::MODE_NEW) ? \'created\' : \'edited\',
            \'target\' => $tv->get(\'name\'),
            \'partition\' => $environment[\'partitions\'][\'modTemplateVar\'],
        );
        break;
    case \'OnTVFormDelete\':
        /**
         * @var modTemplateVar $tv
         */
        $trigger = array(
            \'username\' => $username,
            \'mode\' => \'deleted\',
            \'target\' => $tv->get(\'name\'),
            \'partition\' => $environment[\'partitions\'][\'modTemplateVar\'],
        );
        break;

    case \'OnChunkFormSave\':
        /**
         * @var int $mode
         * @var modChunk $chunk
         */
        $trigger = array(
            \'username\' => $username,
            \'mode\' => ($mode === modSystemEvent::MODE_NEW) ? \'created\' : \'edited\',
            \'target\' => $chunk->get(\'name\'),
            \'partition\' => $environment[\'partitions\'][\'modChunk\'],
        );
        break;
    case \'OnChunkFormDelete\':
        /**
         * @var modChunk $chunk
         */
        $trigger = array(
            \'username\' => $username,
            \'mode\' => \'deleted\',
            \'target\' => $chunk->get(\'name\'),
            \'partition\' => $environment[\'partitions\'][\'modChunk\'],
        );
        break;
    
    case \'OnSnipFormSave\':
        /**
         * @var int $mode
         * @var modSnippet $snippet
         */
        $trigger = array(
            \'username\' => $username,
            \'mode\' => ($mode === modSystemEvent::MODE_NEW) ? \'created\' : \'edited\',
            \'target\' => $snippet->get(\'name\'),
            \'partition\' => $environment[\'partitions\'][\'modSnippet\'],
        );
        break;
    case \'OnSnipFormDelete\':
        /**
         * @var modSnippet $snippet
         */
        $trigger = array(
            \'username\' => $username,
            \'mode\' => \'deleted\',
            \'target\' => $snippet->get(\'name\'),
            \'partition\' => $environment[\'partitions\'][\'modSnippet\'],
        );
        break;
    case \'OnPluginFormSave\':
        /**
         * @var int $mode
         * @var modPlugin $plugin
         */
        $trigger = array(
            \'username\' => $username,
            \'mode\' => ($mode === modSystemEvent::MODE_NEW) ? \'created\' : \'edited\',
            \'target\' => $plugin->get(\'name\'),
            \'partition\' => $environment[\'partitions\'][\'modPlugin\'],
        );
        break;
    case \'OnPluginFormDelete\':
        /**
         * @var modPlugin $plugin
         */
        $trigger = array(
            \'username\' => $username,
            \'mode\' => \'deleted\',
            \'target\' => $plugin->get(\'name\'),
            \'partition\' => $environment[\'partitions\'][\'modPlugin\'],
        );
        break;
}

if ($trigger) {
    /** @var sTask $task */
    $task = $scheduler->getTask(\'gitifywatch\', \'extract\');
    if ($task instanceof sTask) {
        // Try to find one already scheduled
        $run = $modx->getObject(\'sTaskRun\', array(
            \'task\' => $task->get(\'id\'),
            \'status\' => sTaskRun::STATUS_SCHEDULED,
        ));

        if ($run instanceof sTaskRun) {
            $data = $run->get(\'data\');
            $data[\'triggers\'][] = $trigger;
            $run->set(\'data\', $data);
            $run->save();
        } else {
            $commitDelay = isset($environment[\'commit_delay\']) ? $environment[\'commit_delay\'] : \'instant\';
            if ($commitDelay == \'instant\') {
                $time = time() - 60;
            }
            else {
                $time = time() + ($commitDelay * 60);
            }

            $task->schedule($time, array(
                \'triggers\' => array($trigger),
            ));
        }
    }
    else {
        $modx->log(modX::LOG_LEVEL_ERROR, \'Could not find sTask gitifywatch:extract\');
    }
}',
    ),
  ),
  'cfa3051aaa2c6a5079c46e11c29929f9' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 27,
      'event' => 'OnDocFormSave',
    ),
    'object' => 
    array (
      'pluginid' => 27,
      'event' => 'OnDocFormSave',
      'priority' => 10,
      'propertyset' => 0,
    ),
  ),
  '35423ffdf7a27492f68124e7bb9beeb4' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 27,
      'event' => 'OnTempFormSave',
    ),
    'object' => 
    array (
      'pluginid' => 27,
      'event' => 'OnTempFormSave',
      'priority' => 10,
      'propertyset' => 0,
    ),
  ),
  'bd2622b0d5864897f6d2b819e9e17462' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 27,
      'event' => 'OnTempFormDelete',
    ),
    'object' => 
    array (
      'pluginid' => 27,
      'event' => 'OnTempFormDelete',
      'priority' => 10,
      'propertyset' => 0,
    ),
  ),
  '6a3547152858c6698e77f92f0bf95f77' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 27,
      'event' => 'OnTVFormSave',
    ),
    'object' => 
    array (
      'pluginid' => 27,
      'event' => 'OnTVFormSave',
      'priority' => 10,
      'propertyset' => 0,
    ),
  ),
  '7fc409d44fd5bed7fc31b2ccef612345' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 27,
      'event' => 'OnTVFormDelete',
    ),
    'object' => 
    array (
      'pluginid' => 27,
      'event' => 'OnTVFormDelete',
      'priority' => 10,
      'propertyset' => 0,
    ),
  ),
  '487da0dc1abfe8921400f06109bfe965' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 27,
      'event' => 'OnChunkFormSave',
    ),
    'object' => 
    array (
      'pluginid' => 27,
      'event' => 'OnChunkFormSave',
      'priority' => 10,
      'propertyset' => 0,
    ),
  ),
  'ac9a703d4e571abdbc7b4bfc631f664d' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 27,
      'event' => 'OnChunkFormDelete',
    ),
    'object' => 
    array (
      'pluginid' => 27,
      'event' => 'OnChunkFormDelete',
      'priority' => 10,
      'propertyset' => 0,
    ),
  ),
  '764bf0ab10c773722cd9f538d9104c69' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 27,
      'event' => 'OnSnipFormSave',
    ),
    'object' => 
    array (
      'pluginid' => 27,
      'event' => 'OnSnipFormSave',
      'priority' => 10,
      'propertyset' => 0,
    ),
  ),
  '3149a1d534bf7b23c760a9b8e3b5eb64' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 27,
      'event' => 'OnSnipFormDelete',
    ),
    'object' => 
    array (
      'pluginid' => 27,
      'event' => 'OnSnipFormDelete',
      'priority' => 10,
      'propertyset' => 0,
    ),
  ),
  '451db0bdfe02a5d98a308ab0411c6e94' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 27,
      'event' => 'OnPluginFormSave',
    ),
    'object' => 
    array (
      'pluginid' => 27,
      'event' => 'OnPluginFormSave',
      'priority' => 10,
      'propertyset' => 0,
    ),
  ),
  '7705d6a9c2a78a969a76803470078dde' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 27,
      'event' => 'OnPluginFormDelete',
    ),
    'object' => 
    array (
      'pluginid' => 27,
      'event' => 'OnPluginFormDelete',
      'priority' => 10,
      'propertyset' => 0,
    ),
  ),
);