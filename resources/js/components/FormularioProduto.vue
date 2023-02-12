<template>

    <form>
        <div class="row mb-3">

            <div class="col-md-3">
                <div class="input-group">
                    <input type="text" v-model="model" required>
                    <label>Código </label>
                </div>
            </div>


            <div class="col-md-3">
                <div class="input-group">
                    <input type="text" required>
                    <label>Item </label>
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
                    <input type="text" @keypress="isNumber($event)" required>
                    <label>Quantidade</label>
                </div>
            </div>

            <div class="col-md-3">
                <div class="input-group">
                    <input type="text" required>
                    <label>Estoque Minimo </label>
                </div>
            </div>

            <div class="col-md-3">
                <div class="input-group">
                    <input type="text" required>
                    <label>Valor unitário </label>
                </div>
            </div>

            <div class="col-md-3">
                <div class="input-group">
                    <input type="date" required>
                    <label>Data da Compra </label>
                </div>
            </div>

            <div class="col-md-3">
                <div class="input-group">
                    <input type="text" required>
                    <label>Observações </label>
                </div>
            </div>


            <div class="col-md-3">
                <div class="input-group" id="inputSelect">
                    <select id="inputSelect" class="form-control" onclick="this.setAttribute('value', this.value);"
                        value="" required>
                        <option></option>
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

    </form>

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
    props: ['codigo'],
    mounted () {
        this.model = this.codigo;
        console.log("valor do model",this.model)
    },
    /*methods: {
        addTelefone: function (telefone) {
            let tel = Object.assign({}, telefone);

            tel.rowid = this.rowid;
            this.rowid++;

            this.pessoa.telefones.push(tel);
        },
        deletar: function (id) {
            let index = this.pessoa.telefones.map((e) => {
                return e.rowid;
            }).indexOf(id);

            this.pessoa.telefones.splice(index, 1);
        },
        salvar: function () {
            axios.post('/pessoas', this.pessoa).then((response) => {
                window.location = '/pessoas';
            }, (err) => {
                window.alert('Ops! Ocorreu um erro durante o cadastro, verifique suas informações.');
                console.log('erro: ' + err);
            });
        }, 
        isNumber: function (evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if ((charCode > 31 && (charCode < 48 || charCode > 57)) && charCode !== 46) {
                evt.preventDefault();;
            } else {
                return true;
            }

        }
    }*/
}
</script>
      