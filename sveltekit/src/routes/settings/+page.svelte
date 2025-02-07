<script>
   import { user } from "$lib/stores/user.svelte.js";
   import { goto, afterNavigate } from "$app/navigation";
   import { auth } from "$lib/shared/auth.js";
   import Password from "$lib/components/Password.svelte";
   import Contact from "$lib/components/Contact.svelte";

   afterNavigate(async () => {
      const response  = await auth();
      user.auth = response.auth;
      user.userdata = response.userdata;

      if (!user.auth) {
         goto("/login");
      }
   });
</script>

<h1>Inställningar</h1>
<section>
   <Contact />
   <Password />
</section>

<style lang="scss">
   section {
      max-width: 540px;
   }
</style>
