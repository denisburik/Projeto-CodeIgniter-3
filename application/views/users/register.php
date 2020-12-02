<div class="container vh-100">
    <div class="row justify-content-center">
        <div class="col-8 mt-3">
            <form action="<?= base_url('users/register_post') ?>" method="POST">
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-10 col-sm-8 col-md-6 col-xl-4 modal-form border py-3">
                            <div class="content my-2">
                                <label class="lead h4 font-weight-normal" for="name">Nome</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="content my-2">
                                <label class="lead h4 font-weight-normal" for="email">E-mail</label>
                                <input class="form-control" type="text" name="email" id="email">
                            </div>
                            <div class="content my-2">                                             
                                <label class="lead h4 font-weight-normal" for="password">Senha</label>
                                <input class="form-control" type="password" name="password" id="password">
                            </div>
                            <div class="content mt-4 mb-2 d-flex justify-content-between">
                                <button type="submit" name="save" class="btn btn-primary">Enviar</button>
                                <a href="<?= base_url('users/index') ?>" class="text-decoration-none">
                                    <button type="button" class="btn btn-secundary">Login</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>  