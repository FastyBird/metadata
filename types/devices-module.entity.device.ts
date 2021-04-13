export enum State {
    CONNECTED = 'connected',
    DISCONNECTED = 'disconnected',
    INIT = 'init',
    READY = 'ready',
    RUNNING = 'running',
    SLEEPING = 'sleeping',
    STOPPED = 'stopped',
    LOST = 'lost',
    ALERT = 'alert',
    UNKNOWN = 'unknown',
}

export enum HardwareManufacturer {
    GENERIC = 'generic',
    FASTYBIRD = 'fastybird',
    ITEAD = 'itead',
    AI_THINKER = 'ai_thinker',
}

export enum FirmwareManufacturer {
    GENERIC = 'generic',
    FASTYBIRD = 'fastybird',
}

export enum DeviceModel {
    CUSTOM = 'custom',

    SONOFF_BASIC = 'sonoff_basic',
    SONOFF_RF = 'sonoff_rf',
    SONOFF_TH = 'sonoff_th',
    SONOFF_SV = 'sonoff_sv',
    SONOFF_SLAMPHER = 'sonoff_slampher',
    SONOFF_S20 = 'sonoff_s20',
    SONOFF_TOUCH = 'sonoff_touch',
    SONOFF_POW = 'sonoff_pow',
    SONOFF_POW_R2 = 'sonoff_pow_r2',
    SONOFF_DUAL = 'sonoff_dual',
    SONOFF_DUAL_R2 = 'sonoff_dual_r2',
    SONOFF_4CH = 'sonoff_4ch',
    SONOFF_4CH_PRO = 'sonoff_4ch_pro',
    SONOFF_RF_BRIDGE = 'sonoff_rf_bridge',
    SONOFF_B1 = 'sonoff_b1',
    SONOFF_LED = 'sonoff_led',
    SONOFF_T1_1CH = 'sonoff_t1_1ch',
    SONOFF_T1_2CH = 'sonoff_t1_2ch',
    SONOFF_T1_3CH = 'sonoff_t1_3ch',
    SONOFF_S31 = 'sonoff_s31',
    SONOFF_SC = 'sonoff_sc',
    SONOFF_SC_PRO = 'sonoff_sc_pro',
    SONOFF_PS_15 = 'sonoff_ps_15',

    AI_THINKER_AI_LIGHT = 'ai_thinker_ai_light',

    FASTYBIRD_WIFI_GW = 'fastybird_wifi_gw',
    FASTYBIRD_3CH_POWER_STRIP_R1 = 'fastybird_3ch_power_strip_r1',
    FASTYBIRD_8CH_BUTTONS = '8ch_buttons',
    FASTYBIRD_16CH_BUTTONS = '16ch_buttons',
}

export interface Entity {
    id: string
    key: string
    identifier: string
    name: string | null
    comment: string | null
    state: State
    enabled: boolean
    hardware_version: string | null
    hardware_manufacturer: HardwareManufacturer
    hardware_model: DeviceModel
    mac_address: string | null
    firmware_manufacturer: FirmwareManufacturer
    firmware_version: string | null
    control: Array<string>
    owner?: string
}
