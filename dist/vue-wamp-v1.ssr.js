'use strict';Object.defineProperty(exports,'__esModule',{value:true});exports.ModuleOrigin=void 0;

(function (ModuleOrigin) {
  ModuleOrigin["NOT_SPECIFIED_ORIGIN"] = "*";
  ModuleOrigin["MODULE_ACCOUNTS_ORIGIN"] = "com.fastybird.accounts-module";
  ModuleOrigin["MODULE_DEVICES_ORIGIN"] = "com.fastybird.devices-module";
  ModuleOrigin["MODULE_TRIGGERS_ORIGIN"] = "com.fastybird.triggers-module";
  ModuleOrigin["MODULE_UI_ORIGIN"] = "com.fastybird.ui-module";
  ModuleOrigin["MODULE_WEB_UI_ORIGIN"] = "com.fastybird.web-ui-module";
})(exports.ModuleOrigin || (exports.ModuleOrigin = {}));

exports.ModulePrefix=void 0;

(function (ModulePrefix) {
  ModulePrefix["MODULE_ACCOUNTS_PREFIX"] = "accounts-module";
  ModulePrefix["MODULE_DEVICES_PREFIX"] = "devices-module";
  ModulePrefix["MODULE_TRIGGERS_PREFIX"] = "triggers-module";
  ModulePrefix["MODULE_UI_PREFIX"] = "ui-module";
})(exports.ModulePrefix || (exports.ModulePrefix = {}));

exports.DataType=void 0;

(function (DataType) {
  DataType["CHAR"] = "char";
  DataType["UCHAR"] = "uchar";
  DataType["SHORT"] = "short";
  DataType["USHORT"] = "ushort";
  DataType["INT"] = "int";
  DataType["UINT"] = "uint";
  DataType["FLOAT"] = "float";
  DataType["BOOLEAN"] = "bool";
  DataType["STRING"] = "string";
  DataType["ENUM"] = "enum";
  DataType["COLOR"] = "color";
})(exports.DataType || (exports.DataType = {}));

exports.AccountState=void 0;

(function (AccountState) {
  AccountState["ACTIVE"] = "active";
  AccountState["BLOCKED"] = "blocked";
  AccountState["DELETED"] = "deleted";
  AccountState["NOT_ACTIVATED"] = "notActivated";
  AccountState["APPROVAL_WAITING"] = "approvalWaiting";
})(exports.AccountState || (exports.AccountState = {}));

exports.IdentityState=void 0;

(function (IdentityState) {
  IdentityState["ACTIVE"] = "active";
  IdentityState["BLOCKED"] = "blocked";
  IdentityState["DELETED"] = "deleted";
  IdentityState["INVALID"] = "invalid";
})(exports.IdentityState || (exports.IdentityState = {}));

exports.DeviceControlAction=void 0;

(function (DeviceControlAction) {
  DeviceControlAction["CONFIGURE"] = "configure";
  DeviceControlAction["RESET"] = "reset";
  DeviceControlAction["RECONNECT"] = "reconnect";
  DeviceControlAction["FACTORY_RESET"] = "factory-reset";
})(exports.DeviceControlAction || (exports.DeviceControlAction = {}));

exports.ChannelControlAction=void 0;

(function (ChannelControlAction) {
  ChannelControlAction["RESET"] = "reset";
})(exports.ChannelControlAction || (exports.ChannelControlAction = {}));

exports.ConnectorType=void 0;

(function (ConnectorType) {
  ConnectorType["FB_BUS"] = "fb-bus";
  ConnectorType["FB_MQTT_V1"] = "fb-mqtt-v1";
})(exports.ConnectorType || (exports.ConnectorType = {}));

exports.ConnectorControlAction=void 0;

(function (ConnectorControlAction) {
  ConnectorControlAction["SEARCH"] = "search";
  ConnectorControlAction["RESTART"] = "restart";
})(exports.ConnectorControlAction || (exports.ConnectorControlAction = {}));

exports.DeviceConnectionState=void 0;

(function (DeviceConnectionState) {
  DeviceConnectionState["CONNECTED"] = "connected";
  DeviceConnectionState["DISCONNECTED"] = "disconnected";
  DeviceConnectionState["INIT"] = "init";
  DeviceConnectionState["READY"] = "ready";
  DeviceConnectionState["RUNNING"] = "running";
  DeviceConnectionState["SLEEPING"] = "sleeping";
  DeviceConnectionState["STOPPED"] = "stopped";
  DeviceConnectionState["LOST"] = "lost";
  DeviceConnectionState["ALERT"] = "alert";
  DeviceConnectionState["UNKNOWN"] = "unknown";
})(exports.DeviceConnectionState || (exports.DeviceConnectionState = {}));

exports.DeviceType=void 0;

(function (DeviceType) {
  DeviceType["LOCAL"] = "local";
  DeviceType["NETWORK"] = "network";
  DeviceType["VIRTUAL"] = "virtual";
})(exports.DeviceType || (exports.DeviceType = {}));

exports.HardwareManufacturer=void 0;

(function (HardwareManufacturer) {
  HardwareManufacturer["GENERIC"] = "generic";
  HardwareManufacturer["FASTYBIRD"] = "fastybird";
  HardwareManufacturer["ITEAD"] = "itead";
  HardwareManufacturer["AI_THINKER"] = "ai_thinker";
})(exports.HardwareManufacturer || (exports.HardwareManufacturer = {}));

exports.FirmwareManufacturer=void 0;

(function (FirmwareManufacturer) {
  FirmwareManufacturer["GENERIC"] = "generic";
  FirmwareManufacturer["FASTYBIRD"] = "fastybird";
})(exports.FirmwareManufacturer || (exports.FirmwareManufacturer = {}));

exports.DeviceModel=void 0;

(function (DeviceModel) {
  DeviceModel["CUSTOM"] = "custom";
  DeviceModel["SONOFF_BASIC"] = "sonoff_basic";
  DeviceModel["SONOFF_RF"] = "sonoff_rf";
  DeviceModel["SONOFF_TH"] = "sonoff_th";
  DeviceModel["SONOFF_SV"] = "sonoff_sv";
  DeviceModel["SONOFF_SLAMPHER"] = "sonoff_slampher";
  DeviceModel["SONOFF_S20"] = "sonoff_s20";
  DeviceModel["SONOFF_TOUCH"] = "sonoff_touch";
  DeviceModel["SONOFF_POW"] = "sonoff_pow";
  DeviceModel["SONOFF_POW_R2"] = "sonoff_pow_r2";
  DeviceModel["SONOFF_DUAL"] = "sonoff_dual";
  DeviceModel["SONOFF_DUAL_R2"] = "sonoff_dual_r2";
  DeviceModel["SONOFF_4CH"] = "sonoff_4ch";
  DeviceModel["SONOFF_4CH_PRO"] = "sonoff_4ch_pro";
  DeviceModel["SONOFF_RF_BRIDGE"] = "sonoff_rf_bridge";
  DeviceModel["SONOFF_B1"] = "sonoff_b1";
  DeviceModel["SONOFF_LED"] = "sonoff_led";
  DeviceModel["SONOFF_T1_1CH"] = "sonoff_t1_1ch";
  DeviceModel["SONOFF_T1_2CH"] = "sonoff_t1_2ch";
  DeviceModel["SONOFF_T1_3CH"] = "sonoff_t1_3ch";
  DeviceModel["SONOFF_S31"] = "sonoff_s31";
  DeviceModel["SONOFF_SC"] = "sonoff_sc";
  DeviceModel["SONOFF_SC_PRO"] = "sonoff_sc_pro";
  DeviceModel["SONOFF_PS_15"] = "sonoff_ps_15";
  DeviceModel["AI_THINKER_AI_LIGHT"] = "ai_thinker_ai_light";
  DeviceModel["FASTYBIRD_WIFI_GW"] = "fastybird_wifi_gw";
  DeviceModel["FASTYBIRD_3CH_POWER_STRIP_R1"] = "fastybird_3ch_power_strip_r1";
  DeviceModel["FASTYBIRD_8CH_BUTTONS"] = "8ch_buttons";
  DeviceModel["FASTYBIRD_16CH_BUTTONS"] = "16ch_buttons";
})(exports.DeviceModel || (exports.DeviceModel = {}));

exports.TriggerControlAction=void 0;

(function (TriggerControlAction) {
  TriggerControlAction["TRIGGER"] = "trigger";
})(exports.TriggerControlAction || (exports.TriggerControlAction = {}));

exports.TriggerActionType=void 0;

(function (TriggerActionType) {
  TriggerActionType["CHANNEL_PROPERTY"] = "channel-property";
})(exports.TriggerActionType || (exports.TriggerActionType = {}));

exports.TriggerConditionType=void 0;

(function (TriggerConditionType) {
  TriggerConditionType["CHANNEL_PROPERTY"] = "channel-property";
  TriggerConditionType["DEVICE_PROPERTY"] = "device-property";
  TriggerConditionType["TIME"] = "time";
  TriggerConditionType["DATE"] = "date";
})(exports.TriggerConditionType || (exports.TriggerConditionType = {}));

exports.TriggerConditionOperator=void 0;

(function (TriggerConditionOperator) {
  TriggerConditionOperator["EQUAL"] = "eq";
  TriggerConditionOperator["ABOVE"] = "above";
  TriggerConditionOperator["BELOW"] = "below";
})(exports.TriggerConditionOperator || (exports.TriggerConditionOperator = {}));

exports.TriggerNotificationType=void 0;

(function (TriggerNotificationType) {
  TriggerNotificationType["EMAIL"] = "email";
  TriggerNotificationType["SMS"] = "sms";
})(exports.TriggerNotificationType || (exports.TriggerNotificationType = {}));

exports.TriggerType=void 0;

(function (TriggerType) {
  TriggerType["MANUAL"] = "manual";
  TriggerType["AUTOMATIC"] = "automatic";
})(exports.TriggerType || (exports.TriggerType = {}));

exports.SwitchPayload=void 0;

(function (SwitchPayload) {
  SwitchPayload["ON"] = "on";
  SwitchPayload["OFF"] = "off";
  SwitchPayload["TOGGLE"] = "toggle";
})(exports.SwitchPayload || (exports.SwitchPayload = {}));exports.AccountsModule=void 0;

(function (AccountsModule) {
  AccountsModule["ACCOUNTS_CREATED_ENTITY"] = "fb.bus.entity.created.account";
  AccountsModule["ACCOUNTS_UPDATED_ENTITY"] = "fb.bus.entity.updated.account";
  AccountsModule["ACCOUNTS_DELETED_ENTITY"] = "fb.bus.entity.deleted.account";
  AccountsModule["EMAILS_CREATED_ENTITY"] = "fb.bus.entity.created.email";
  AccountsModule["EMAILS_UPDATED_ENTITY"] = "fb.bus.entity.updated.email";
  AccountsModule["EMAILS_DELETED_ENTITY"] = "fb.bus.entity.deleted.email";
  AccountsModule["IDENTITIES_CREATED_ENTITY"] = "fb.bus.entity.created.identity";
  AccountsModule["IDENTITIES_UPDATED_ENTITY"] = "fb.bus.entity.updated.identity";
  AccountsModule["IDENTITIES_DELETED_ENTITY"] = "fb.bus.entity.deleted.identity";
})(exports.AccountsModule || (exports.AccountsModule = {}));

exports.DevicesModule=void 0;

(function (DevicesModule) {
  DevicesModule["DEVICES_CREATED_ENTITY"] = "fb.bus.entity.created.device";
  DevicesModule["DEVICES_UPDATED_ENTITY"] = "fb.bus.entity.updated.device";
  DevicesModule["DEVICES_DELETED_ENTITY"] = "fb.bus.entity.deleted.device";
  DevicesModule["DEVICES_CONTROLS"] = "fb.bus.control.device";
  DevicesModule["DEVICES_PROPERTY_CREATED_ENTITY"] = "fb.bus.entity.created.device.property";
  DevicesModule["DEVICES_PROPERTY_UPDATED_ENTITY"] = "fb.bus.entity.updated.device.property";
  DevicesModule["DEVICES_PROPERTY_DELETED_ENTITY"] = "fb.bus.entity.deleted.device.property";
  DevicesModule["DEVICES_PROPERTIES_DATA"] = "fb.bus.data.device.property";
  DevicesModule["DEVICES_CONFIGURATION_CREATED_ENTITY"] = "fb.bus.entity.created.device.configuration";
  DevicesModule["DEVICES_CONFIGURATION_UPDATED_ENTITY"] = "fb.bus.entity.updated.device.configuration";
  DevicesModule["DEVICES_CONFIGURATION_DELETED_ENTITY"] = "fb.bus.entity.deleted.device.configuration";
  DevicesModule["DEVICES_CONFIGURATION_DATA"] = "fb.bus.data.device.configuration";
  DevicesModule["DEVICES_CONNECTOR_CREATED_ENTITY"] = "fb.bus.entity.created.device.connector";
  DevicesModule["DEVICES_CONNECTOR_UPDATED_ENTITY"] = "fb.bus.entity.updated.device.connector";
  DevicesModule["DEVICES_CONNECTOR_DELETED_ENTITY"] = "fb.bus.entity.deleted.device.connector";
  DevicesModule["CHANNELS_CREATED_ENTITY"] = "fb.bus.entity.created.channel";
  DevicesModule["CHANNELS_UPDATED_ENTITY"] = "fb.bus.entity.updated.channel";
  DevicesModule["CHANNELS_DELETED_ENTITY"] = "fb.bus.entity.deleted.channel";
  DevicesModule["CHANNELS_CONTROLS"] = "fb.bus.control.channel";
  DevicesModule["CHANNELS_PROPERTY_CREATED_ENTITY"] = "fb.bus.entity.created.channel.property";
  DevicesModule["CHANNELS_PROPERTY_UPDATED_ENTITY"] = "fb.bus.entity.updated.channel.property";
  DevicesModule["CHANNELS_PROPERTY_DELETED_ENTITY"] = "fb.bus.entity.deleted.channel.property";
  DevicesModule["CHANNELS_PROPERTIES_DATA"] = "fb.bus.data.channel.property";
  DevicesModule["CHANNELS_CONFIGURATION_CREATED_ENTITY"] = "fb.bus.entity.created.channel.configuration";
  DevicesModule["CHANNELS_CONFIGURATION_UPDATED_ENTITY"] = "fb.bus.entity.updated.channel.configuration";
  DevicesModule["CHANNELS_CONFIGURATION_DELETED_ENTITY"] = "fb.bus.entity.deleted.channel.configuration";
  DevicesModule["CHANNELS_CONFIGURATION_DATA"] = "fb.bus.data.channel.configuration";
  DevicesModule["CONNECTOR_CREATED_ENTITY"] = "fb.bus.entity.created.connector";
  DevicesModule["CONNECTOR_UPDATED_ENTITY"] = "fb.bus.entity.updated.connector";
  DevicesModule["CONNECTOR_DELETED_ENTITY"] = "fb.bus.entity.deleted.connector";
  DevicesModule["CONNECTOR_CONTROLS"] = "fb.bus.control.connector";
})(exports.DevicesModule || (exports.DevicesModule = {}));

exports.TriggersModule=void 0;

(function (TriggersModule) {
  TriggersModule["TRIGGERS_CREATED_ENTITY"] = "fb.bus.entity.created.trigger";
  TriggersModule["TRIGGERS_UPDATED_ENTITY"] = "fb.bus.entity.updated.trigger";
  TriggersModule["TRIGGERS_DELETED_ENTITY"] = "fb.bus.entity.deleted.trigger";
  TriggersModule["TRIGGER_CONTROLS"] = "fb.bus.control.trigger";
  TriggersModule["TRIGGERS_ACTIONS_CREATED_ENTITY"] = "fb.bus.entity.created.trigger.action";
  TriggersModule["TRIGGERS_ACTIONS_UPDATED_ENTITY"] = "fb.bus.entity.updated.trigger.action";
  TriggersModule["TRIGGERS_ACTIONS_DELETED_ENTITY"] = "fb.bus.entity.deleted.trigger.action";
  TriggersModule["TRIGGERS_NOTIFICATIONS_CREATED_ENTITY"] = "fb.bus.entity.created.trigger.notification";
  TriggersModule["TRIGGERS_NOTIFICATIONS_UPDATED_ENTITY"] = "fb.bus.entity.updated.trigger.notification";
  TriggersModule["TRIGGERS_NOTIFICATIONS_DELETED_ENTITY"] = "fb.bus.entity.deleted.trigger.notification";
  TriggersModule["TRIGGERS_CONDITIONS_CREATED_ENTITY"] = "fb.bus.entity.created.trigger.condition";
  TriggersModule["TRIGGERS_CONDITIONS_UPDATED_ENTITY"] = "fb.bus.entity.updated.trigger.condition";
  TriggersModule["TRIGGERS_CONDITIONS_DELETED_ENTITY"] = "fb.bus.entity.deleted.trigger.condition";
})(exports.TriggersModule || (exports.TriggersModule = {}));

exports.UiModule=void 0;

(function (UiModule) {})(exports.UiModule || (exports.UiModule = {}));