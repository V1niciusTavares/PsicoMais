import { writable } from 'svelte/store'

export let estado = writable('menu');

export function TrocarEstadoPag(novoEstado) {
	estado.set(novoEstado)
}