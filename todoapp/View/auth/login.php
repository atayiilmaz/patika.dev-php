<?php require BASEDIR.'/View/static/header.php'; ?>
<div class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>TODO</b>APP</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg"><?= lang('Oturum açın'); ?></p>

                <form action="<?= URL.'login'; ?>" method="post">
                    <div class="input-group mb-3">
                        <?= get('hata'); ?>
                        <input type="email" class="form-control" name="eposta" placeholder="<?= lang('E-posta'); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="sifre" placeholder="<?= lang('Şifre'); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    <?= lang('Beni Hatırla'); ?>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" name="submit" value="1" class="btn btn-primary btn-block"><?= lang('Giriş Yap'); ?></button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center mb-3">
                    <p><?= lang('Veya'); ?></p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> <?= lang('Facebook ile Giriş Yap'); ?>
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> <?= lang('Google+ ile Giriş Yap'); ?>
                    </a>
                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    <a href="forgot-password.html"><?= lang('Şifremi Unuttum'); ?></a>
                </p>
                <p class="mb-0">
                    <a href="register.html" class="text-center"><?= lang('Kayıt Ol'); ?></a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
</div>


<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= assets('plugins/jquery/jquery.slim.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= assets('plugins/bootstrap/js/bootstrap.bundle.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= assets('js/adminlte.min.js'); ?>"></script>
</body>
</html>
