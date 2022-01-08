export enum TriggerType {
  MANUAL = 'manual',
  AUTOMATIC = 'automatic',
}

export enum ActionType {
  DEVICE_PROPERTY = 'device-property',
  CHANNEL_PROPERTY = 'channel-property',
}

export enum ConditionType {
  CHANNEL_PROPERTY = 'channel-property',
  DEVICE_PROPERTY = 'device-property',
  TIME = 'time',
  DATE = 'date',
}

export enum NotificationType {
  EMAIL = 'email',
  SMS = 'sms',
}

export enum ConditionOperator {
  EQUAL = 'eq',
  ABOVE = 'above',
  BELOW = 'below',
}

export interface TriggerEntity {
  id: string
  type: TriggerType
  name: string
  comment: string | null
  enabled: boolean
  owner: string | null
  is_triggered?: boolean | null
  is_fulfilled?: boolean | null

  [k: string]: string | TriggerType | boolean | null | undefined
}

export interface TriggerControlEntity {
  id: string
  name: string
  trigger: string
  owner: string | null

  [k: string]: string | null
}

export interface ActionEntity {
  id: string
  type: ActionType
  enabled: boolean
  trigger: string
  device?: string
  channel?: string
  property?: string
  value?: string
  owner: string | null
  is_triggered?: boolean | null

  [k: string]: string | ActionType | boolean | null | undefined
}

export interface ConditionEntity {
  id: string
  type: ConditionType
  enabled: boolean
  trigger: string
  device?: string
  channel?: string
  property?: string
  operand?: string
  operator?: ConditionOperator
  time?: string
  days?: number[]
  date?: string
  owner: string | null
  is_fulfilled?: boolean | null

  [k: string]: string | ConditionType | ConditionOperator | boolean | number[] | null | undefined
}

export interface NotificationEntity {
  id: string
  type: NotificationType
  enabled: boolean
  trigger: string
  email?: string
  phone?: string
  owner: string | null

  [k: string]: string | NotificationType | boolean | null | undefined
}
