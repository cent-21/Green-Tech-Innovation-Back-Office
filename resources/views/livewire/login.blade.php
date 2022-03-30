<div>
    <form wire:submit.prevent="login" >

        @if (session()->has("error"))
            <div class="alert alert-warning">
                {{ session('error') }}
            </div>
        @endif

        <div class="my-4">
          <label class="mb-2">Email</label>
          <input type="email" wire:model="email" required  class="form-control">
          <span class="error">{{ $error_email }}</span>
        </div>

        <div class="mb-4">
          <label class="mb-2">Mot de passe</label>
          <input type="password" wire:model="password" required minlength="6" class="form-control">
          <span class="error">{{ $error_password }}</span>
        </div>


        <div class="text-center">
            <div class="" wire:loading wire:target="login">
                <div class="spinner-border text-primary" role="status"></div>
            </div>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-login" wire:loading.remove wire:target="login" style="width: 100%">Se connecter</button>
        </div>

      </form>
</div>
