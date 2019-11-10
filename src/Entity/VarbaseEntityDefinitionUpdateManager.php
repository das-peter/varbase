<?php
/**
 * Compatibility wrapper to new class structure.
 */

require_once __DIR__ . '/../../modules/varbase_profile/src/Entity/VarbaseProfileEntityDefinitionUpdateManager.php';
class_alias('Drupal\varbase_profile\Entity\VarbaseProfileEntityDefinitionUpdateManager', 'Drupal\varbase\Entity\VarbaseEntityDefinitionUpdateManager');
