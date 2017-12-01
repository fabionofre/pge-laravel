<template>
    <div>
        <form novalidate class="md-layout-row md-gutter" @submit.prevent="salvarAdv">
            <md-card class="md-flex-100 md-flex-small-100">
                <md-card-header>
                  <div class="md-title">Dados Pessoais</div>
                </md-card-header>
                <md-card-content>
                    <div class="md-layout-row md-layout-wrap md-gutter">
                        <div class="md-flex md-flex-small-100">
                          <md-field>
                            <label for="nome">Nome Completo</label> 
                            <md-input name="nome" id="nome" v-model="adv.nome"/> 
                          </md-field>
                        </div>
                    </div>
                    <div class="md-layout-row md-layout-wrap md-gutter">
                        <div class="md-flex md-flex-small-100">
                          <md-field>
                            <label for="oab">OAB</label>
                            <md-input name="oab" id="oab"v-model="adv.oab"/>
                          </md-field>
                        </div> 
                    </div>
                    <div class="md-layout-row md-layout-wrap md-gutter">
                        <div class="md-flex md-flex-small-100">
                          <md-field>
                            <label for="rg">RG</label>
                            <md-input name="rg" id="rg" v-model="adv.rg"/>
                          </md-field>
                        </div>
                    </div>
                    <div class="md-layout-row md-layout-wrap md-gutter">
                        <div class="md-flex md-flex-small-100">
                          <md-field>
                            <label for="cpf">CPF</label>
                            <md-input name="cpf" id="cpf" v-model="adv.cpf"/>
                          </md-field>
                        </div>
                    </div>
                    <div class="md-title">Endereço</div>
                    <div class="md-layout-row md-layout-wrap md-gutter">
                        <div class="md-flex md-flex-small-100">
                          <md-field>
                            <label for="cep">CEP</label>
                            <md-input name="cep" id="cep" v-model="adv.cep"/>
                          </md-field>
                        </div>
                    </div>
                    <div class="md-layout-row md-layout-wrap md-gutter">
                        <div class="md-flex md-flex-small-100">
                          <md-field>
                            <label for="cidade">Cidade</label>
                            <md-input name="cidade" id="cidade" v-model="adv.cidade" disabled/>
                          </md-field>
                        </div>
                        <div class="md-flex md-flex-small-100">
                          <md-field>
                            <label for="uf">UF</label>
                            <md-input name="uf" id="uf" v-model="adv.uf"/>
                          </md-field>
                        </div>
                        <div class="md-flex md-flex-small-100">
                          <md-field>
                            <label for="rua">Rua</label>
                            <md-input name="rua" id="rua" v-model="adv.rua"/>
                          </md-field>
                        </div>
                    </div>
                    <div class="md-title">Atuação</div>
                    <div class="md-layout-row md-gutter">
                        <div class="md-flex">
                            <md-field>
                                <label for="esp">Especialidades</label>
                                <md-select v-model="adv.especialidades" name="especialidades" id="esp" md-dense multiple>
                                    <md-option v-for="esp in especialidades" v-bind:key="esp.id" v-bind:value="esp.id">{{esp.nome}}</md-option>
                                </md-select>
                            </md-field>
                        </div>
                        <div class="md-flex">
                            <md-field>
                                <label for="cidades">Comarca</label>
                                <md-select v-model="adv.cidades" name="cidades" id="cidades" md-dense multiple>
                                    <md-option value="rio-branco">Rio Branco</md-option>
                                    <md-option value="xapuri">Xapuri</md-option>
                                    <md-option value="brasileira">Brasiléia</md-option>
                                </md-select>
                            </md-field>
                        </div>
                    </div>
                </md-card-content>
                <md-card-actions>
                    <md-button type="submit" class="md-primary">Salvar</md-button>
                </md-card-actions>
            </md-card>
        </form>
    </div>
</template>
<script>
    import axios from 'axios';
    export default {
        name: 'AdvogadoForm',
        created (){
            this.carregaEsp();
        },
        data: () => ({
            adv: {
                nome: null,
                oab: null,
                cep: null,
                cidade: null,
                uf: null,
                rua: null,
                especialidades: [],
                cidades: [],
                rg: null,
                cpf: null
            },
            especialidades: [{}],
        }),
        methods: {
            salvarAdv (){
                axios.post('http://consulta.pge/advogado', {
                    nome: this.adv.nome,
                    oab: this.adv.oab,
                    cep: this.adv.cep,
                    cidade: this.adv.cidade,
                    uf: this.adv.uf,
                    rg: this.adv.rg,
                    cpf: this.adv.cpf,
                    rua: this.adv.rua
                  })
                  .then(response => {
                    console.log(response);
                    const adv_id = response.data.id;
                    this.adv.especialidades.forEach(esp => {
                        axios.post('http://consulta.pge/advogado/especialidade', {
                            especialidade_id: esp,
                            advogado_id: adv_id
                        }).then(response => console.log(response)).catch(error => console.log(error));
                    });
                    
                  })
                  .catch(function (error) {
                    console.log(error);
                  });
            },
            carregaEsp(){
                axios.get('http://consulta.pge/especialidade')
                    .then(response => {this.especialidades = response.data;console.log(this.especialidades)});
            }
        }
    }
</script>
<style lang="scss" scoped>
  .md-content {
    width: 100px;
    height: 100px;
    margin: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
</style>