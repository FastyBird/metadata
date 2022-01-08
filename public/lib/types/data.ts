import { ButtonPayload, ControlAction, PropertyAction, SwitchPayload } from '@/lib/types/types'

export interface ConnectorControlData {
  action: ControlAction
  control: string
  connector: string
  expected_value?:
    | null
    | string
    | number
    | boolean

  [k: string]: string | number | boolean | ControlAction | null | undefined
}

export interface DeviceControlData {
  action: ControlAction
  control: string
  device: string
  expected_value?:
    | null
    | string
    | number
    | boolean

  [k: string]: string | number | boolean | ControlAction | null | undefined
}

export interface ChannelControlData {
  action: ControlAction
  control: string
  device: string
  channel: string
  expected_value?:
    | null
    | string
    | number
    | boolean

  [k: string]: string | number | boolean | ControlAction | null | undefined
}

export interface TriggerControlData {
  action: ControlAction
  control: string
  trigger: string
  expected_value?:
    | null
    | string
    | number
    | boolean

  [k: string]: string | number | boolean | ControlAction | null | undefined
}

export interface DevicePropertyData {
  action: PropertyAction
  device: string
  property: string
  expected_value?: string | number | boolean | ButtonPayload | SwitchPayload
  actual_value?: string | number | boolean | ButtonPayload | SwitchPayload
  pending?: boolean

  [k: string]: string | number | boolean | PropertyAction | ButtonPayload | SwitchPayload | undefined
}

export interface ChannelPropertyData {
  action: PropertyAction
  device: string
  channel: string
  property: string
  expected_value?: string | number | boolean | ButtonPayload | SwitchPayload
  actual_value?: string | number | boolean | ButtonPayload | SwitchPayload
  pending?: boolean

  [k: string]: string | number | boolean | PropertyAction | ButtonPayload | SwitchPayload | undefined
}
