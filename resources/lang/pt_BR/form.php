<?php

/**
 * form.php
 * Copyright (c) 2018 thegrumpydictator@gmail.com
 *
 * This file is part of Firefly III.
 *
 * Firefly III is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Firefly III is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Firefly III. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    // new user:
    'bank_name'                      => 'Nome do banco',
    'bank_balance'                   => 'Saldo',
    'savings_balance'                => 'Salda da Poupança',
    'credit_card_limit'              => 'Limite do Cartão de Crédito',
    'automatch'                      => 'Equivale automaticamente',
    'skip'                           => 'Pular',
    'name'                           => 'Nome',
    'active'                         => 'Ativar',
    'amount_min'                     => 'Valor Mínimo',
    'amount_max'                     => 'Valor Máximo',
    'match'                          => 'Corresponde em',
    'strict'                         => 'Modo estrito',
    'repeat_freq'                    => 'Repetições',
    'journal_currency_id'            => 'Moeda',
    'currency_id'                    => 'Moeda',
    'transaction_currency_id'        => 'Moeda',
    'external_ip'                    => 'O IP externo do seu servidor',
    'attachments'                    => 'Anexos',
    'journal_amount'                 => 'Quantia',
    'journal_source_account_name'    => 'Conta de receita (fonte)',
    'journal_source_account_id'      => 'Conta de ativo (fonte)',
    'BIC'                            => 'BIC',
    'verify_password'                => 'Verificação da segurança da senha',
    'source_account'                 => 'Conta de origem',
    'destination_account'            => 'Conta de destino',
    'journal_destination_account_id' => 'Conta de ativo (destino)',
    'asset_destination_account'      => 'Conta de ativo (destino)',
    'asset_source_account'           => 'Conta de ativo (fonte)',
    'journal_description'            => 'Descrição',
    'note'                           => 'Notas',
    'split_journal'                  => 'Dividir essa transação',
    'split_journal_explanation'      => 'Dividir essa transação em várias partes',
    'currency'                       => 'Moeda',
    'account_id'                     => 'Conta de ativo',
    'budget_id'                      => 'Orçamento',
    'openingBalance'                 => 'Saldo inicial',
    'tagMode'                        => 'Modo de tag',
    'tag_position'                   => 'Localização do indexador',
    'virtualBalance'                 => 'Saldo virtual',
    'targetamount'                   => 'Valor alvo',
    'accountRole'                    => 'Tipo de conta',
    'openingBalanceDate'             => 'Data do Saldo inicial',
    'ccType'                         => 'Plano de pagamento do Cartão de Crédito',
    'ccMonthlyPaymentDate'           => 'Data do pagamento mensal do Cartão de Crédito',
    'piggy_bank_id'                  => 'Cofrinho',
    'returnHere'                     => 'Retornar aqui',
    'returnHereExplanation'          => 'Depois de armazenar, retorne aqui para criar outro.',
    'returnHereUpdateExplanation'    => 'Depois da atualização, retorne aqui',
    'description'                    => 'Descrição',
    'expense_account'                => 'Conta de Despesa',
    'revenue_account'                => 'Conta de Receita',
    'decimal_places'                 => 'Casas décimais',
    'exchange_rate_instruction'      => 'Moedas estrangeiras',
    'source_amount'                  => 'Quantidade (fonte)',
    'destination_amount'             => 'Quantidade (destino)',
    'native_amount'                  => 'Montante original',
    'new_email_address'              => 'Novo endereço de e-mail',
    'verification'                   => 'Verificação',
    'api_key'                        => 'Chave da API',
    'remember_me'                    => 'Lembrar-me',

    'source_account_asset'        => 'Conta de origem (conta de ativo)',
    'destination_account_expense' => 'Conta de destino (conta de despesa)',
    'destination_account_asset'   => 'Conta de destino (conta de ativo)',
    'source_account_revenue'      => 'Conta de origem (conta de receita)',
    'type'                        => 'Tipo',
    'convert_Withdrawal'          => 'Converter a retirada',
    'convert_Deposit'             => 'Converter o depósito',
    'convert_Transfer'            => 'Converter a transferência',

    'amount'                      => 'Valor',
    'foreign_amount'              => 'Montante em moeda estrangeira',
    'existing_attachments'        => 'Anexos existentes',
    'date'                        => 'Data',
    'interest_date'               => 'Data de interesse',
    'book_date'                   => 'Data reserva',
    'process_date'                => 'Data de processamento',
    'category'                    => 'Categoria',
    'tags'                        => 'Etiquetas',
    'deletePermanently'           => 'Apagar permanentemente',
    'cancel'                      => 'Cancelar',
    'targetdate'                  => 'Data Alvo',
    'startdate'                   => 'Data de Início',
    'tag'                         => 'Etiqueta',
    'under'                       => 'Debaixo',
    'symbol'                      => 'Símbolo',
    'code'                        => 'Código',
    'iban'                        => 'IBAN',
    'accountNumber'               => 'Número de conta',
    'creditCardNumber'            => 'Número do cartão de crédito',
    'has_headers'                 => 'Cabeçalhos',
    'date_format'                 => 'Formato da Data',
    'specifix'                    => 'Banco- ou arquivo específico corrigídos',
    'attachments[]'               => 'Anexos',
    'store_new_withdrawal'        => 'Armazenar nova retirada',
    'store_new_deposit'           => 'Armazenar novo depósito',
    'store_new_transfer'          => 'Armazenar nova transferência',
    'add_new_withdrawal'          => 'Adicionar uma nova retirada',
    'add_new_deposit'             => 'Adicionar um novo depósito',
    'add_new_transfer'            => 'Adicionar uma nova transferência',
    'title'                       => 'Título',
    'notes'                       => 'Notas',
    'filename'                    => 'Nome do arquivo',
    'mime'                        => 'Tipo do Arquivo (MIME)',
    'size'                        => 'Tamanho',
    'trigger'                     => 'Disparo',
    'stop_processing'             => 'Parar processamento',
    'start_date'                  => 'Início do intervalo',
    'end_date'                    => 'Final do intervalo',
    'export_start_range'          => 'Início do intervalo de exportação',
    'export_end_range'            => 'Fim do intervalo de exportação',
    'export_format'               => 'Formato do arquivo',
    'include_attachments'         => 'Incluir anexos enviados',
    'include_old_uploads'         => 'Incluir dados importados',
    'accounts'                    => 'Exportar transações destas contas',
    'delete_account'              => 'Apagar conta ":name"',
    'delete_bill'                 => 'Apagar fatura ":name"',
    'delete_budget'               => 'Excluir o orçamento ":name"',
    'delete_category'             => 'Excluir categoria ":name"',
    'delete_currency'             => 'Excluir moeda ":name"',
    'delete_journal'              => 'Excluir a transação com a descrição ":description"',
    'delete_attachment'           => 'Apagar anexo ":name"',
    'delete_rule'                 => 'Excluir regra ":title"',
    'delete_rule_group'           => 'Exclua o grupo de regras ":title"',
    'delete_link_type'            => 'Excluir tipo de link ":name"',
    'delete_user'                 => 'Excluir o usuário ":email"',
    'delete_recurring'            => 'Delete recurring transaction ":title"',
    'user_areYouSure'             => 'Se você excluir o usuário ":email", tudo desaparecerá. Não será possível desfazer a ação. Se excluir você mesmo, você perderá acesso total a essa instância do Firefly III.',
    'attachment_areYouSure'       => 'Tem certeza que deseja excluir o anexo denominado ":name"?',
    'account_areYouSure'          => 'Tem certeza que deseja excluir a conta denominada ":name"?',
    'bill_areYouSure'             => 'Você tem certeza que quer apagar a fatura ":name"?',
    'rule_areYouSure'             => 'Tem certeza que deseja excluir a regra intitulada ":title"?',
    'ruleGroup_areYouSure'        => 'Tem certeza que deseja excluir o grupo de regras intitulado ":title"?',
    'budget_areYouSure'           => 'Tem certeza que deseja excluir o orçamento chamado ":name"?',
    'category_areYouSure'         => 'Tem certeza que deseja excluir a categoria com o nome ":name"?',
    'recurring_areYouSure'        => 'Are you sure you want to delete the recurring transaction titled ":title"?',
    'currency_areYouSure'         => 'Tem certeza que deseja excluir a moeda chamada ":name"?',
    'piggyBank_areYouSure'        => 'Tem certeza que deseja excluir o cofrinho chamado ":name"?',
    'journal_areYouSure'          => 'Tem certeza que deseja excluir a transação descrita ":description"?',
    'mass_journal_are_you_sure'   => 'Tem a certeza que pretende apagar estas transações?',
    'tag_areYouSure'              => 'Você tem certeza que quer apagar a tag ":tag"?',
    'journal_link_areYouSure'     => 'Tem certeza que deseja excluir a ligação entre <a href=":source_link">:source</a> e <a href=":destination_link">:destination</a>?',
    'linkType_areYouSure'         => 'Tem certeza que deseja excluir o tipo de link ":name" (":inward" / ":outward")?',
    'permDeleteWarning'           => 'Exclusão de dados do Firefly III são permanentes e não podem ser desfeitos.',
    'mass_make_selection'         => 'Você ainda pode evitar que itens sejam excluídos, removendo a caixa de seleção.',
    'delete_all_permanently'      => 'Exclua os selecionados permanentemente',
    'update_all_journals'         => 'Atualizar essas transações',
    'also_delete_transactions'    => 'A única transação ligada a essa conta será excluída também.|Todas as :count transações ligadas a esta conta serão excluídas também.',
    'also_delete_connections'     => 'A única transação relacionada com este tipo de link vai perder a conexão. | Todas as transações de :count ligadas com este tipo de link vão perder sua conexão.',
    'also_delete_rules'           => 'A única regra que ligado a este grupo de regras será excluída também.|Todos as :count regras ligadas a este grupo de regras serão excluídas também.',
    'also_delete_piggyBanks'      => 'O único cofrinho conectado a essa conta será excluído também.|Todos os :count cofrinhos conectados a esta conta serão excluídos também.',
    'bill_keep_transactions'      => 'The only transaction connected to this bill will not be deleted.|All :count transactions connected to this bill will be spared deletion.',
    'budget_keep_transactions'    => 'The only transaction connected to this budget will not be deleted.|All :count transactions connected to this budget will be spared deletion.',
    'category_keep_transactions'  => 'The only transaction connected to this category will not be deleted.|All :count transactions connected to this category will be spared deletion.',
    'recurring_keep_transactions' => 'The only transaction created by this recurring transaction will not be deleted.|All :count transactions created by this recurring transaction will be spared deletion.',
    'tag_keep_transactions'       => 'The only transaction connected to this tag will not be deleted.|All :count transactions connected to this tag will be spared deletion.',
    'check_for_updates'           => 'Buscar atualizações',

    'email'                 => 'E-mail',
    'password'              => 'Senha',
    'password_confirmation' => 'Senha(Confirmar)',
    'blocked'               => 'Está bloqueado?',
    'blocked_code'          => 'Razão para ser reportado',

    // import
    'apply_rules'           => 'Apply rules',
    'artist'                => 'Artist',
    'album'                 => 'Album',
    'song'                  => 'Song',


    // admin
    'domain'                => 'Domínio',
    'single_user_mode'      => 'Desabilitar registro de usuários',
    'is_demo_site'          => 'É o site de demonstração',

    // import
    'import_file'           => 'Importar arquivo',
    'configuration_file'    => 'Arquivo de configuração',
    'import_file_type'      => 'Tipo de arquivo de importação',
    'csv_comma'             => 'Uma vírgula (,)',
    'csv_semicolon'         => 'Um ponto e vírgula (;)',
    'csv_tab'               => 'Um Tab (invisível)',
    'csv_delimiter'         => 'Delimitador de campo CSV',
    'csv_import_account'    => 'Conta de importação padrão',
    'csv_config'            => 'Importar CSV de configuração',
    'client_id'             => 'Id do Cliente',
    'service_secret'        => 'Service secret',
    'app_secret'            => 'App secret',
    'app_id'                => 'App ID',
    'secret'                => 'Segredo',
    'public_key'            => 'Chave pública',
    'country_code'          => 'Código do país',
    'provider_code'         => 'Banco ou provedor de dados',

    'due_date'                => 'Data de vencimento',
    'payment_date'            => 'Data de pagamento',
    'invoice_date'            => 'Data da Fatura',
    'internal_reference'      => 'Referência interna',
    'inward'                  => 'Descrição interna',
    'outward'                 => 'Descrição externa',
    'rule_group_id'           => 'Grupo de regras',
    'transaction_description' => 'Transaction description',
    'first_date'              => 'First date',
    'transaction_type'        => 'Transaction type',
    'repeat_until'            => 'Repeat until',
    'recurring_description'   => 'Recurring transaction description',
    'repetition_type'         => 'Type of repetition',
    'foreign_currency_id'     => 'Foreign currency',
    'repetition_end'          => 'Repetition ends',
    'repetitions'             => 'Repetitions',
    'calendar'                => 'Calendar',
    'weekend'                 => 'Weekend',

];
