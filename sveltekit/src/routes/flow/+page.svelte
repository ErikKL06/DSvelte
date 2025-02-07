<script>
   /**
    * Omdirigerar! Kan tas bort helt.
    * Kan användas vid alternativ lösning.
    */
   import { user } from "$lib/stores/user.svelte.js";
   import { goto, afterNavigate } from "$app/navigation";

   afterNavigate(async () => {
      const response  = await auth();
      user.auth = response.auth;
      user.userdata = response.userdata;
      console.log(user.userdata.uid);
      

      if (!user.auth) goto("/login");
      else goto("/flow/{user.userdata.uid}");
   });
</script>
