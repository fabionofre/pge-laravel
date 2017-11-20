<template>
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-md-offset-1">
                <form>
                    <div class="form-group">
                        <h3>Nome</h3>
                        <input type="text" class="form-control" v-model="adv.nome" placeholder="Digite seu nome">
                    </div>
                    <div class="form-group">
                        <h3>OAB</h3>
                        <input type="text" class="form-control" v-model="adv.oab" placeholder="Digite seu código OAB">
                    </div>
                    <hr>
                    <h3>Endereço</h3>
                    <div class="form-row row">
                        <div class="col-md-3">
                          <input type="text" class="form-control" v-model="adv.cep" placeholder="CEP">
                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" v-model="adv.cidade" placeholder="Cidade" readonly>
                        </div>
                        <div class="col-md-2">
                          <input type="text" class="form-control" v-model="adv.uf" placeholder="UF" maxlength="2" readonly>
                        </div>
                        <div class="col-md-4">
                          <input type="text" class="form-control" v-model="adv.rua" placeholder="Rua" readonly>
                        </div>
                    </div>
                    <hr>
                    <h3>Atuação</h3>
                    <div class="form-row row">
                        <div class="col-md-4">
                            <select type="text" class="form-control" v-model="adv.especialidades">
                                <option>Especialidade</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select type="text" class="form-control" v-model="adv.cidades">
                                <option>Cidade</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <button type="submit" @click.self.prevent="salvarAdvogado" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script> 
    export default {
        data(){
            return {
                adv: {
                    nome: '',
                    oab: '',
                    cep: '',
                    cidade: '',
                    uf: '',
                    rua: '',
                    especialidades: [],
                    cidades: []
                }
            }
        },
        mounted() {
            console.log('Componente montado.')   
        },
        methods: {
            salvarAdvogado: function(){
                console.log(this.adv);
            }
        }

    }
</script>
