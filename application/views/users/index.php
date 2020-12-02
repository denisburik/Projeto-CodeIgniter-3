<div class="container vh-100">
    <div class="row justify-content-center h-100">
        <div class="col-10 col-md-8 mt-3">
            <form action="<?= base_url('users/login_post') ?>" method="POST">
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-10 col-sm-8 col-md-6 col-xl-4 modal-form border py-3">
                            <div class="content my-2">
                                <label class="lead h4 font-weight-normal" for="name">Nome</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="content my-2">                                             
                                <label class="lead h4 font-weight-normal" for="password">Senha</label>
                                <input class="form-control" type="text" name="password" id="password">
                            </div>
                            <div class="content mt-4 mb-2 d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Login</button>
                                <a href="<?= base_url('users/register') ?>" class="text-decoration-none">
                                    <button type="button" class="btn btn-secundary">Cadastro</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>