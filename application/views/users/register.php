<div class="container">
    <div class="row">
        <div class="col-12 bg-primary">
            <div class="nav text-center text-white h2">Project CI 3</div>
        </div>
    </div>
    <div class="col-12">
        <form action="<?= base_url('users/register_post') ?>" method="POST">
            <div class="content">
                <div class="row">
                    <div class="col-8">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <div class="col-8 mt-3">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" id="email">
                    </div>
                    <div class="col-8 mt-3">
                        <label for="password">Senha</label>
                        <input type="text" name="password" id="password">
                    </div>
                    <div class="col-8">
                        <div class="content d-flex justify-content-end">
                            <button type="submit"></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>  