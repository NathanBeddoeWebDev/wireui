import { Entangle } from '../alpine'
import { Template, TemplateName } from './templates'

export type Option = {
  [index: string]: any
  value: any
  label: string
  template?: TemplateName
  html?: string
  disabled?: boolean
  readonly?: boolean
}

export type TemplateConfig = {
  name: TemplateName,
  config: object
}

export type Options = Option[]

export type AsyncData = {
  api: string | null
  fetching: boolean
}

export type InitOptions = {
  wireModel?: Entangle
}

export type Config = {
  hasSlot: boolean
  searchable: boolean
  multiselect: boolean
  readonly: boolean
  disabled: boolean
  placeholder: string | null
  optionValue: string | null
  optionLabel: string | null
  optionDescription: string | null
  template: Template
}

export type Props = Config & {
  asyncData: string | null
  template: TemplateConfig
}

export type Refs = {
  json: HTMLElement
  search?: HTMLInputElement
  input: HTMLInputElement
  slot: HTMLElement
  route: HTMLElement
  optionsContainer?: HTMLElement
}