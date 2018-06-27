<?php

/**
 * validation.php
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
    'iban'                           => 'Este não é um válido IBAN.',
    'source_equals_destination'      => 'A conta de origem é igual à conta de destino',
    'unique_account_number_for_user' => 'Parece que este número de conta já está em uso.',
    'unique_iban_for_user'           => 'Parece que este IBAN já está em uso.',
    'deleted_user'                   => 'Devido a restrições de segurança, você não pode registrar usando este endereço de e-mail.',
    'rule_trigger_value'             => 'Este valor é inválido para o disparo selecionado.',
    'rule_action_value'              => 'Este valor é inválido para a ação selecionada.',
    'file_already_attached'          => 'Arquivo ":name" carregado já está anexado para este objeto.',
    'file_attached'                  => 'Arquivo carregado com sucesso ":name".',
    'must_exist'                     => 'O ID no campo :attribute não existe no banco de dados.',
    'all_accounts_equal'             => 'Todas as contas neste campo devem ser iguais.',
    'invalid_selection'              => 'Sua seleção é inválida',
    'belongs_user'                   => 'Esse valor é inválido para este campo.',
    'at_least_one_transaction'       => 'Precisa de ao menos uma transação.',
    'require_currency_info'          => 'O conteúdo deste campo é inválido sem informações de moeda.',
    'equal_description'              => 'A descrição da transação não pode ser igual à descrição global.',
    'file_invalid_mime'              => 'Arquivo ":name" é do tipo ":mime" que não é aceito como um novo upload.',
    'file_too_large'                 => 'Arquivo ":name" é muito grande.',
    'belongs_to_user'                => 'O valor de :attribute é desconhecido',
    'accepted'                       => 'O campo :attribute deve ser aceito.',
    'bic'                            => 'Este não é um BIC válido.',
    'base64'                         => 'This is not valid base64 encoded data.',
    'model_id_invalid'               => 'The given ID seems invalid for this model.',
    'more'                           => ':attribute deve ser maior que zero.',
    'active_url'                     => 'O campo :attribute não contém um URL válido.',
    'after'                          => 'O campo :attribute deverá conter uma data posterior a :date.',
    'alpha'                          => 'O campo :attribute deverá conter apenas letras.',
    'alpha_dash'                     => 'O campo :attribute deverá conter apenas letras, números e traços.',
    'alpha_num'                      => 'O campo :attribute deverá conter apenas letras e números .',
    'array'                          => 'O campo :attribute precisa ser um conjunto.',
    'unique_for_user'                => 'Já existe uma entrada com este :attribute.',
    'before'                         => 'O campo :attribute deverá conter uma data anterior a :date.',
    'unique_object_for_user'         => 'Este nome já está em uso',
    'unique_account_for_user'        => 'Este nome de conta já está em uso',
    'between.numeric'                => 'O campo :attribute deverá ter um valor entre :min - :max.',
    'between.file'                   => 'O campo :attribute deverá ter um tamanho entre :min - :max kilobytes.',
    'between.string'                 => 'O campo :attribute deverá conter entre :min - :max caracteres.',
    'between.array'                  => 'O campo :attribute precisar ter entre :min - :max itens.',
    'boolean'                        => 'O campo :attribute deverá ter o valor verdadeiro ou falso.',
    'confirmed'                      => 'A confirmação para o campo :attribute não coincide.',
    'date'                           => 'O campo :attribute não contém uma data válida.',
    'date_format'                    => 'A data indicada para o campo :attribute não respeita o formato :format.',
    'different'                      => 'Os campos :attribute e :other deverão conter valores diferentes.',
    'digits'                         => 'O campo :attribute deverá conter :digits dígitos.',
    'digits_between'                 => 'O campo :attribute deverá conter entre :min a :max dígitos.',
    'email'                          => 'O campo :attribute não contém um endereço de email válido.',
    'filled'                         => 'O campo :attribute é obrigatório.',
    'exists'                         => 'O valor selecionado para o campo :attribute é inválido.',
    'image'                          => 'O campo :attribute deverá conter uma imagem.',
    'in'                             => 'O campo :attribute não contém um valor válido.',
    'integer'                        => 'O campo :attribute deverá conter um número inteiro.',
    'ip'                             => 'O campo :attribute deverá conter um IP válido.',
    'json'                           => 'O campo :attribute deverá conter uma string JSON válida.',
    'max.numeric'                    => 'O campo :attribute não deverá conter um valor superior a :max.',
    'max.file'                       => 'O campo :attribute não deverá ter um tamanho superior a :max kilobytes.',
    'max.string'                     => 'O campo :attribute não deverá conter mais de :max caracteres.',
    'max.array'                      => 'O campo :attribute deve ter no máximo :max itens.',
    'mimes'                          => 'O campo :attribute deverá conter um arquivo do tipo: :values.',
    'min.numeric'                    => 'O campo :attribute deverá ter um valor superior ou igual a :min.',
    'min.file'                       => 'O campo :attribute deverá ter no mínimo :min kilobytes.',
    'min.string'                     => 'O campo :attribute deverá conter no mínimo :min caracteres.',
    'min.array'                      => 'O campo :attribute deve ter no mínimo :min itens.',
    'not_in'                         => 'O campo :attribute contém um valor inválido.',
    'numeric'                        => 'O campo :attribute deverá conter um valor numérico.',
    'regex'                          => 'O formato do valor para o campo :attribute é inválido.',
    'required'                       => 'O campo :attribute é obrigatório.',
    'required_if'                    => 'O campo :attribute é obrigatório quando o valor do campo :other é igual a :value.',
    'required_unless'                => 'O campo :attribute é obrigatório a menos que :other esteja presente em :values.',
    'required_with'                  => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all'              => 'O campo :attribute é obrigatório quando um dos :values está presente.',
    'required_without'               => 'O campo :attribute é obrigatório quanto :values não está presente.',
    'required_without_all'           => 'O campo :attribute é obrigatório quando nenhum dos :values está presente.',
    'same'                           => 'Os campos :attribute e :other deverão conter valores iguais.',
    'size.numeric'                   => 'O campo :attribute deverá conter o valor :size.',
    'amount_min_over_max'            => 'O valor mínimo não pode ser maior do que o valor máximo.',
    'size.file'                      => 'O campo :attribute deverá ter o tamanho de :size kilobytes.',
    'size.string'                    => 'O campo :attribute deverá conter :size caracteres.',
    'size.array'                     => 'O campo :attribute deve ter :size itens.',
    'unique'                         => 'O valor indicado para o campo :attribute já se encontra utilizado.',
    'string'                         => 'O campo :attribute deve ser uma string.',
    'url'                            => 'O formato do URL indicado para o campo :attribute é inválido.',
    'timezone'                       => 'O campo :attribute deverá ter um fuso horário válido.',
    '2fa_code'                       => 'O campo :attribute é inválido.',
    'dimensions'                     => 'O campo :attribute tem dimensões de imagem inválido.',
    'distinct'                       => 'O campo :attribute tem um valor duplicado.',
    'file'                           => 'O :attribute deve ser um arquivo.',
    'in_array'                       => 'O campo :attribute não existe em :other.',
    'present'                        => 'O campo :attribute deve estar presente.',
    'amount_zero'                    => 'A quantidade total não pode ser zero',
    'unique_piggy_bank_for_user'     => 'The name of the piggy bank must be unique.',
    'secure_password'                => 'This is not a secure password. Please try again. For more information, visit http://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'      => 'Invalid repetition type for recurring transactions',
    'attributes'                     => [
        'email'                   => 'endereço de e-mail',
        'description'             => 'descrição',
        'amount'                  => 'quantidade',
        'name'                    => 'nome',
        'piggy_bank_id'           => 'ID do cofrinho',
        'targetamount'            => 'quantidade alvo',
        'openingBalanceDate'      => 'data do Saldo inicial',
        'openingBalance'          => 'saldo inicial',
        'match'                   => 'coincidente',
        'amount_min'              => 'valor mínimo',
        'amount_max'              => 'valor máximo',
        'title'                   => 'título',
        'tag'                     => 'identificador',
        'transaction_description' => 'Descrição da transação',
        'rule-action-value.1'     => 'valor de ação de regra #1',
        'rule-action-value.2'     => 'valor de ação de regra #2',
        'rule-action-value.3'     => 'valor de ação de regra #3',
        'rule-action-value.4'     => 'valor de ação de regra #4',
        'rule-action-value.5'     => 'valor de ação de regra #5',
        'rule-action.1'           => 'regra de ação #1',
        'rule-action.2'           => 'regra de ação #2',
        'rule-action.3'           => 'regra de ação #3',
        'rule-action.4'           => 'regra de ação #4',
        'rule-action.5'           => 'regra de ação #5',
        'rule-trigger-value.1'    => 'valor do disparador da regra #1',
        'rule-trigger-value.2'    => 'valor do disparador da regra #2',
        'rule-trigger-value.3'    => 'valor do disparador da regra #3',
        'rule-trigger-value.4'    => 'valor do disparador da regra #4',
        'rule-trigger-value.5'    => 'valor do disparador da regra #5',
        'rule-trigger.1'          => 'disparador da regra #1',
        'rule-trigger.2'          => 'disparador da regra #2',
        'rule-trigger.3'          => 'disparador da regra #3',
        'rule-trigger.4'          => 'disparador da regra #4',
        'rule-trigger.5'          => 'disparador da regra #5',
    ],
];
