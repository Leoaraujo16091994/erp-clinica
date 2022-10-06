<template>
   <div class="row mb-3">
                   
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="text" required>
                            <label>Código </label>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="text" required>
                            <label>Descrição </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="text" required>
                            <label>Quantidade</label>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="input-group" id="inputSelect">
                        <select class="form-control" onclick="this.setAttribute('value', this.value);" value="">
                                <option ></option>
                                <option value="1">Sala A</option>
                                <option value="2">Sala B</option>
                                <option value="3">Sala C</option>
                                <option value="4">Sala D</option>
                                <option value="5">Sala E</option>
                            </select>
                            <label>Grupo</label>
                        </div>
                    </div>                   
                    
                </div>

</template>


<script>
    export default {
        data() {
            return {
                telefone: {},
                pessoa: {
                    telefones: []
                },
                rowid: 0
            }
        },
        methods: {
            addTelefone: function (telefone) {
                let tel = Object.assign({}, telefone);

                tel.rowid = this.rowid;
                this.rowid++;

                this.pessoa.telefones.push(tel);
            }, deletar: function (id) {
               let index = this.pessoa.telefones.map((e) => {
                  return e.rowid;
               }).indexOf(id);

               this.pessoa.telefones.splice(index, 1);
            }, salvar: function () {
               axios.post('/pessoas', this.pessoa).then((response) => {
                  window.location = '/pessoas';
               }, (err) => {
                  window.alert('Ops! Ocorreu um erro durante o cadastro, verifique suas informações.');
                  console.log('erro: '+err);
               });
            }
        }
    }
</script>
      