<div class="form-group">
                    <label>Nome:</label>
                    <input type="text" name="name" class="form-control" placeholder="Nome:" value="{{ $inspector->name ?? '' }}">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="emailIntertek" class="form-control" placeholder="Email Intertek" value="{{ $inspector->emailInstertek ?? ''}}">
                </div>

                <div class="form-group">
                    <label>Disciplina</label>
                    <input type="text" name="disciplina" class="form-control" placeholder="Disciplina" value="{{ $inspector->disciplina ?? ''}}">
                </div>

                <div class="form-group">
                    <label>Qualificacoes</label>
                    <input type="text" name="qualificacoes" class="form-control" placeholder="Qualificacoes" value="{{ $inspector->qualificacoes ?? ''}}">
                </div>

                <div class="form-group">
                    <label>Cidade</label>
                    <input type="text" name="cidade" class="form-control" placeholder="Cidade" value="{{ $inspector->cidade ?? ''}}">
                </div>

                <div class="form-group">
                    <label>UF</label>
                    <input type="text" name="UF" class="form-control" placeholder="UF" value="{{ $inspector->UF ?? ''}}">
                </div>

                <div class="form-group">
                    <label>Bairro</label>
                    <input type="text" name="bairro" class="form-control" placeholder="Bairro" value="{{ $inspector->bairro ?? ''}}">
                </div>

                <div class="form-group">
                    <label>Endereco</label></label>
                    <input type="text" name="rua" class="form-control" placeholder="Endereco" value="{{ $inspector->rua ?? '' }}">
                </div>

                <div class="form-group">
                    <label>Telefone 1</label>
                    <input type="text" name="telefone1" class="form-control" placeholder="Telefone Principal - WhatsApp" value="{{ $inspector->telefone1 ?? '' }}">
                </div>

                <div class="form-group">
                    <label>Telefone 2</label>
                    <input type="text" name="telefone2" class="form-control" placeholder="Telefone Auxiliar / Emergencias" value="{{ $inspector->telefone2 ?? '' }}">
                </div>
