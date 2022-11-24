import { writable } from "svelte/store";

export const page = writable ('home');

export const users = writable(
    (localStorage.getItem('users')) ? JSON.parse(localStorage.getItem('users')) : [] 

    /* 
        Exportando users, criando função writable

    */
);

export const currentUser = writable(
    localStorage.getItem('currentUser') ? 
        JSON.parse(localStorage.getItem('currentUser')) : 
        []
);

export const ursinhos = writable(
    localStorage.getItem('ursinhos') ? 
        JSON.parse(localStorage.getItem('ursinhos')) : 
        []
)

users.subscribe(value => {
    localStorage.setItem('users', JSON.stringify(value))
})

currentUser.subscribe(value => {
    localStorage.setItem('currentUser', JSON.stringify(value))
})

ursinhos.subscribe(value => {
    localStorage.setItem('ursinhos', JSON.stringify(value))
})

