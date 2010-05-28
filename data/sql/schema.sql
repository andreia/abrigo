CREATE TABLE acolhido (id BIGINT AUTO_INCREMENT, nome VARCHAR(255) NOT NULL, sexo VARCHAR(9) NOT NULL, datanascimento DATE, dataingresso DATE, motivoingresso_id BIGINT NOT NULL, processosrelacionados TEXT, zona VARCHAR(100), distrito VARCHAR(100), livro VARCHAR(100), folha VARCHAR(100), termo VARCHAR(100), documentoidentidade VARCHAR(100), cpf VARCHAR(100), titulo VARCHAR(100), carteiratrabalho VARCHAR(100), possuideficiencia VARCHAR(3) DEFAULT 'Não' NOT NULL, descricaodeficiencia TEXT, usomedicamentocontrolado VARCHAR(3) DEFAULT 'Não' NOT NULL, descricaomedicamentocontrolado TEXT, mae_id BIGINT, pai_id BIGINT, responsavel_id BIGINT, responsavelgrauparentesco_id BIGINT, sumariosocial TEXT, sumariopsicologico TEXT, datadesligamento DATE, motivodesligamento_id BIGINT, INDEX motivoingresso_id_idx (motivoingresso_id), INDEX motivodesligamento_id_idx (motivodesligamento_id), INDEX pai_id_idx (pai_id), INDEX mae_id_idx (mae_id), INDEX responsavel_id_idx (responsavel_id), INDEX responsavelgrauparentesco_id_idx (responsavelgrauparentesco_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE apadrinhamento (acolhido_id BIGINT, padrinho_id BIGINT, datainicio DATE NOT NULL, datafim DATE, observacoes TEXT, PRIMARY KEY(acolhido_id, padrinho_id)) ENGINE = INNODB;
CREATE TABLE curso_externo_acolhido (id BIGINT AUTO_INCREMENT, acolhido_id BIGINT, nomecurso VARCHAR(255) NOT NULL, descricao TEXT, nomeescola VARCHAR(255) NOT NULL, dataconclusao DATE, INDEX acolhido_id_idx (acolhido_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE entidades_passadas_acolhido (id BIGINT AUTO_INCREMENT, acolhido_id BIGINT NOT NULL, nomeentidade VARCHAR(255) NOT NULL, dataentrada DATE NOT NULL, datasaida DATE NOT NULL, INDEX acolhido_id_idx (acolhido_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE entradas_e_saidas_acolhido (id BIGINT AUTO_INCREMENT, acolhido_id BIGINT NOT NULL, mae_id BIGINT, pai_id BIGINT, responsavel_id BIGINT, voluntario_id BIGINT, padrinho_id BIGINT, datasaida DATETIME NOT NULL, dataprevistaretorno DATETIME NOT NULL, dataretorno DATETIME, observacoes TEXT, INDEX acolhido_id_idx (acolhido_id), INDEX pai_id_idx (pai_id), INDEX mae_id_idx (mae_id), INDEX responsavel_id_idx (responsavel_id), INDEX voluntario_id_idx (voluntario_id), INDEX padrinho_id_idx (padrinho_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE escolaridade_acolhido (acolhido_id BIGINT, escolaridade_id BIGINT, nomeescola VARCHAR(255) NOT NULL, dataconclusao DATE, PRIMARY KEY(acolhido_id, escolaridade_id)) ENGINE = INNODB;
CREATE TABLE grau_parentesco_responsavel (id BIGINT AUTO_INCREMENT, nome VARCHAR(255) NOT NULL, ordem BIGINT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE responsavel (id BIGINT AUTO_INCREMENT, nome VARCHAR(255) NOT NULL, sexo VARCHAR(9) NOT NULL, datanascimento DATE, dataobito DATE, endlogradouro VARCHAR(255), endnumero VARCHAR(50), endcomplemento VARCHAR(50), endbairro VARCHAR(100), endcidade VARCHAR(255), endestado VARCHAR(2) DEFAULT 'RJ' NOT NULL, endcep VARCHAR(9), contatos TEXT, autorizacaovisita VARCHAR(3) NOT NULL, observacao TEXT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE motivo_desligamento (id BIGINT AUTO_INCREMENT, nome VARCHAR(255) NOT NULL, ordem BIGINT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE motivo_ingresso (id BIGINT AUTO_INCREMENT, nome VARCHAR(255) NOT NULL, ordem BIGINT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE nivel_escolaridade (id BIGINT AUTO_INCREMENT, nome VARCHAR(100) NOT NULL, grau VARCHAR(100) NOT NULL, ordem BIGINT, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE padrinho (id BIGINT AUTO_INCREMENT, nome VARCHAR(255) NOT NULL, sexo VARCHAR(9) NOT NULL, datanascimento DATE, endlogradouro VARCHAR(255), endnumero VARCHAR(50), endcomplemento VARCHAR(50), endbairro VARCHAR(100), endcidade VARCHAR(255), endestado VARCHAR(2) DEFAULT 'RJ' NOT NULL, endcep VARCHAR(9), endproflogradouro VARCHAR(255), endprofnumero VARCHAR(50), endprofcomplemento VARCHAR(50), endprofbairro VARCHAR(100), endprofcidade VARCHAR(255), endprofestado VARCHAR(2) DEFAULT 'RJ' NOT NULL, endprofcep VARCHAR(9), contatos TEXT, escolaridade_id BIGINT, profissao VARCHAR(255), composicaofamiliar TEXT, preferenciareligiosa TEXT, conhecimentoprograma TEXT, interessepreliminar TEXT, observacao TEXT, datainscricao DATE, tecnicoresponsavel VARCHAR(255), INDEX escolaridade_id_idx (escolaridade_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE pessoa (id BIGINT AUTO_INCREMENT, nome VARCHAR(255) NOT NULL, sexo VARCHAR(9) NOT NULL, datanascimento DATE, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE voluntario (id BIGINT AUTO_INCREMENT, nome VARCHAR(255) NOT NULL, sexo VARCHAR(9) NOT NULL, datanascimento DATE, endlogradouro VARCHAR(255), endnumero VARCHAR(50), endcomplemento VARCHAR(50), endbairro VARCHAR(100), endcidade VARCHAR(255), endestado VARCHAR(2) DEFAULT 'RJ' NOT NULL, endcep VARCHAR(9), endproflogradouro VARCHAR(255), endprofnumero VARCHAR(50), endprofcomplemento VARCHAR(50), endprofbairro VARCHAR(100), endprofcidade VARCHAR(255), endprofestado VARCHAR(2) DEFAULT 'RJ' NOT NULL, endprofcep VARCHAR(9), contatos TEXT, escolaridade_id BIGINT, profissao VARCHAR(255), composicaofamiliar TEXT, preferenciareligiosa TEXT, conhecimentoprograma TEXT, disponibilidadehorario TEXT, atividadedesenvolvida TEXT, observacao TEXT, datainscricao DATE, tecnicoresponsavel VARCHAR(255), INDEX escolaridade_id_idx (escolaridade_id), PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE acolhido ADD CONSTRAINT argi FOREIGN KEY (responsavelgrauparentesco_id) REFERENCES grau_parentesco_responsavel(id);
ALTER TABLE acolhido ADD CONSTRAINT acolhido_responsavel_id_responsavel_id FOREIGN KEY (responsavel_id) REFERENCES responsavel(id);
ALTER TABLE acolhido ADD CONSTRAINT acolhido_pai_id_responsavel_id FOREIGN KEY (pai_id) REFERENCES responsavel(id);
ALTER TABLE acolhido ADD CONSTRAINT acolhido_motivoingresso_id_motivo_ingresso_id FOREIGN KEY (motivoingresso_id) REFERENCES motivo_ingresso(id);
ALTER TABLE acolhido ADD CONSTRAINT acolhido_motivodesligamento_id_motivo_desligamento_id FOREIGN KEY (motivodesligamento_id) REFERENCES motivo_desligamento(id);
ALTER TABLE acolhido ADD CONSTRAINT acolhido_mae_id_responsavel_id FOREIGN KEY (mae_id) REFERENCES responsavel(id);
ALTER TABLE apadrinhamento ADD CONSTRAINT apadrinhamento_padrinho_id_padrinho_id FOREIGN KEY (padrinho_id) REFERENCES padrinho(id);
ALTER TABLE apadrinhamento ADD CONSTRAINT apadrinhamento_acolhido_id_acolhido_id FOREIGN KEY (acolhido_id) REFERENCES acolhido(id);
ALTER TABLE curso_externo_acolhido ADD CONSTRAINT curso_externo_acolhido_acolhido_id_acolhido_id FOREIGN KEY (acolhido_id) REFERENCES acolhido(id);
ALTER TABLE entidades_passadas_acolhido ADD CONSTRAINT entidades_passadas_acolhido_acolhido_id_acolhido_id FOREIGN KEY (acolhido_id) REFERENCES acolhido(id);
ALTER TABLE entradas_e_saidas_acolhido ADD CONSTRAINT entradas_e_saidas_acolhido_voluntario_id_voluntario_id FOREIGN KEY (voluntario_id) REFERENCES voluntario(id);
ALTER TABLE entradas_e_saidas_acolhido ADD CONSTRAINT entradas_e_saidas_acolhido_responsavel_id_responsavel_id FOREIGN KEY (responsavel_id) REFERENCES responsavel(id);
ALTER TABLE entradas_e_saidas_acolhido ADD CONSTRAINT entradas_e_saidas_acolhido_pai_id_responsavel_id FOREIGN KEY (pai_id) REFERENCES responsavel(id);
ALTER TABLE entradas_e_saidas_acolhido ADD CONSTRAINT entradas_e_saidas_acolhido_padrinho_id_padrinho_id FOREIGN KEY (padrinho_id) REFERENCES padrinho(id);
ALTER TABLE entradas_e_saidas_acolhido ADD CONSTRAINT entradas_e_saidas_acolhido_mae_id_responsavel_id FOREIGN KEY (mae_id) REFERENCES responsavel(id);
ALTER TABLE entradas_e_saidas_acolhido ADD CONSTRAINT entradas_e_saidas_acolhido_acolhido_id_acolhido_id FOREIGN KEY (acolhido_id) REFERENCES acolhido(id);
ALTER TABLE escolaridade_acolhido ADD CONSTRAINT escolaridade_acolhido_escolaridade_id_nivel_escolaridade_id FOREIGN KEY (escolaridade_id) REFERENCES nivel_escolaridade(id);
ALTER TABLE escolaridade_acolhido ADD CONSTRAINT escolaridade_acolhido_acolhido_id_acolhido_id FOREIGN KEY (acolhido_id) REFERENCES acolhido(id);
ALTER TABLE padrinho ADD CONSTRAINT padrinho_escolaridade_id_nivel_escolaridade_id FOREIGN KEY (escolaridade_id) REFERENCES nivel_escolaridade(id);
ALTER TABLE voluntario ADD CONSTRAINT voluntario_escolaridade_id_nivel_escolaridade_id FOREIGN KEY (escolaridade_id) REFERENCES nivel_escolaridade(id);
