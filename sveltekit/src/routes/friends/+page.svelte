<script>
   import Load from "$lib/components/Load.svelte";
   import { user } from "$lib/stores/user.svelte.js";
   import { goto, afterNavigate } from "$app/navigation";
   import { auth } from "$lib/shared/auth.js";

   afterNavigate(async () => {
      const response  = await auth();
      user.auth = response.auth;
      user.userdata = response.userdata;

      if (!user.auth) {
         goto("/login");
      }
   });
</script>

<h1>Vänner</h1>
<section>
   <Load /> <!-- Endast för att visa hur den fungerar -->
   <ul>
      <!-- 
         Renderar ut all användare i tabellen user. 
         skapa en länk till varje användare ()<a href="/flow/uid>) för att visa användarens flöde."
      -->
   </ul>
</section>

<style lang="scss">
   section {
      max-width: 540px;
   }
</style>
