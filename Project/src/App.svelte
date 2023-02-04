<script>
	import { onDestroy } from 'svelte';
	import scheduleStore from './schedule-store.js';
	import Calendar from './Calendar.svelte';
	import Scheduler from './Scheduler.svelte';

	
	import Menu from "./Menu.svelte";
	import Cliente from "./cliente.svelte";
	import Profissional from "./profissional.svelte";
	import TelaHomeInstituicao from "./TelaHomeInstituicao.svelte";
	import { estado } from "./Estado.js";
	import LoginCliente from "./LoginCliente.svelte";
    import LoginProfissional from "./LoginProfissional.svelte";
    import LoginInstituicao from "./LoginInstituicao.svelte";
    import TelaHomeCliente from "./TelaHomeCliente.svelte";
    import TelaHomeProfissional from "./TelaHomeProfissional.svelte";
	import MarcarConsulta from "./MarcarConsulta.svelte";
	import AgendaProfissional from "./AgendaProfissional.svelte";


	let schedule = {};
	const unsubscribe = scheduleStore.subscribe(currState => {
		schedule = currState;
		// localStorage.setItem("storedSchedule", schedule)
	});
	
	onDestroy(() => {
		if (unsubscribe) unsubscribe();
	});
	
	let schedulerShowing = false;	
	let dateID = "";
	let dateHeading = "";

	$: appointments = schedule[dateID];
	
	const makeDateHeading = () => {
		let dateAsHeading = dateID.replace(/_/g, " ");
		let date = new Date(`${dateAsHeading}`);
		return dateHeading = date.toLocaleString("en-US", {day: 'numeric', month: 'long', year: 'numeric'} );
	}
	
	const handleScheduler = (e) => {
		schedulerShowing = true;
		dateID = e.target.dataset.dateid;
		makeDateHeading();
	}
	
	const removeEmptyDate = () => {
		if (schedule[dateID] && schedule[dateID].length === 0) {
			scheduleStore.update(currDataState => {
				delete currDataState[dateID];
				return currDataState
			});
		}
		return;
	}
	
	const closeScheduler = () => {
		schedulerShowing = false;
		removeEmptyDate();
	}
	
	const setApptToSch = (e) => {
		//console.log(e.detail)
		let time = `${e.detail.hour}:${e.detail.minutes < 10 ? '0'+e.detail.minutes : e.detail.minutes}${e.detail.amOrPM}`;
		
		let newAppt = {
			id: Math.floor(Math.random() * 1000000),
			eventname: e.detail.eventName,
			time: time === ":0" ? "no time set" : time,
			completed: false
		};
		
		if (!schedule[dateID]) {
			scheduleStore.update(currState => { 
				currState[dateID] = [newAppt]; 
				return currState 
			})
		} else {
			scheduleStore.update(currState => {
				let currDayAppts = currState[dateID];
				currState[dateID] = [...currDayAppts, newAppt];
				return currState 
			})
		}
		
// 		if (!schedule[dateID]) {
// 			schedule[dateID] = [newAppt];
// 			console.log("First and only appt of this day entered");
// 		} else {
// 			let currSchedAppts = schedule[dateID];
// 			schedule[dateID] = [...currSchedAppts, newAppt]
// 		}	
	}
	
	$: console.log(schedule)
</script>

{#if $estado === "menu"}
		<Menu />
		
	{:else if $estado === "LoginCliente"}
		<LoginCliente />

	{:else if $estado === "profissional"}
		<Profissional />

	{:else if $estado === "telahomeinstituicao"}
		<TelaHomeInstituicao />

	{:else if $estado === "cliente"}
	<Cliente />
	{:else if $estado === "LoginProfissional"}
	<LoginProfissional />

	{:else if $estado === "LoginInstituicao"}
	<LoginInstituicao/>
	
	{:else if $estado === "telahomecliente"}
	<TelaHomeCliente/>
	
	{:else if $estado === "telahomeprofissional"}
	<TelaHomeProfissional/>

	{:else if $estado === "MarcarConsulta"}
	<MarcarConsulta/>

	{:else if $estado === "AgendaProfissional"}
	<AgendaProfissional/>

	{:else if $estado === "Calendar"}
	<Calendar/>

	{:else if $estado === "Scheduler"}
	<Scheduler/>
	
{/if}

<main>
	<Calendar on:click={handleScheduler}
						{schedule} />
		{#if schedulerShowing}
			<Scheduler on:modalClose={closeScheduler}
								 on:addAppt={setApptToSch}
								 {dateID}
								 {dateHeading}
								 {appointments}
									/>
		{/if}
</main>	
		
<style>
	
</style>