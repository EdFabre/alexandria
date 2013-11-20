<?PHP // $Id: role.php,v 1.21 2010/08/11 10:11:33 avilela Exp $ 
      // role.php - created with Moodle 1.9 Beta 4 (2007101506)


$string['addrole'] = 'Adicionar novo cargo atribuível';
$string['allow'] = 'Permitir';
$string['allowassign'] = 'Permitir atribuir cargos';
$string['allowoverride'] = 'Permitir revogar cargos';
$string['assignglobalroles'] = 'Atribuir cargos globais';
$string['assignroles'] = 'Atribuir cargos';
$string['assignrolesin'] = 'Atribuir cargos em $a';
$string['block:view'] = 'Ver bloco';
$string['blog:create'] = 'Criar novos tópicos no blogue';
$string['blog:manageentries'] = 'Editar e gerir tópicos';
$string['blog:manageofficialtags'] = 'Gerir palavras chave oficiais';
$string['blog:managepersonaltags'] = 'Gerir palavras chave pessoais';
$string['blog:view'] = 'Ver tópicos do blogue';
$string['calendar:manageentries'] = 'Gerir eventos no calendário';
$string['calendar:managegroupentries'] = 'Gerir eventos de grupo no calendário';
$string['calendar:manageownentries'] = 'Gerir os seus próprios eventos no calendário';
$string['capabilities'] = 'Competências';
$string['capability'] = 'Competência';
$string['category:create'] = 'Criar categorias';
$string['category:delete'] = 'Apagar categorias';
$string['category:update'] = 'Actualizar categorias';
$string['category:visibility'] = 'Ver categorias ocultas';
$string['course:activityvisibility'] = 'Ocultar/mostrar actividades';
$string['course:bulkmessaging'] = 'Enviar mensagem a várias pessoas';
$string['course:create'] = 'Criar disciplinas';
$string['course:delete'] = 'Apagar disciplinas';
$string['course:manageactivities'] = 'Gerir actividades';
$string['course:managefiles'] = 'Gerir ficheiros';
$string['course:managegrades'] = 'Gerir notas';
$string['course:managegroups'] = 'Gerir grupos';
$string['course:managemetacourse'] = 'Gerir meta-disciplinas';
$string['course:managescales'] = 'Gerir escalas';
$string['course:reset'] = 'Reverter disciplina';
$string['course:sectionvisibility'] = 'Controlar visibilidade das secções';
$string['course:setcurrentsection'] = 'Designar secção actual';
$string['course:update'] = 'Actualizar configurações da disciplina';
$string['course:useremail'] = 'Activar/desactivar endereços de correio electrónico';
$string['course:view'] = 'Ver disciplinas';
$string['course:viewcoursegrades'] = 'Ver notas da disciplina';
$string['course:viewhiddenactivities'] = 'Ver actividades ocultas';
$string['course:viewhiddencourses'] = 'Ver disciplinas ocultas';
$string['course:viewhiddensections'] = 'Ver secções ocultas';
$string['course:viewhiddenuserfields'] = 'Ver campos do utilizador ocultos';
$string['course:viewparticipants'] = 'Ver participantes';
$string['course:viewscales'] = 'Ver escalas';
$string['course:visibility'] = 'Ocultar/mostrar disciplinas';
$string['currentcontext'] = 'Contexto actual';
$string['currentrole'] = 'Cargo actual';
$string['defaultrole'] = 'Cargo por omissão';
$string['defineroles'] = 'Definir cargos';
$string['deletecourseoverrides'] = 'Apagar todas as revogações nesta disciplina';
$string['deletelocalroles'] = 'Apagar todas as atribuições de cargos locais';
$string['deleterolesure'] = 'Tem a certeza que quer apagar o cargo \"$a->name\" ($a->shortname)\"?</p><p>Actualmente há $a->count utilizadores com esse cargo.';
$string['duplicaterole'] = 'Duplicar cargo';
$string['duplicaterolesure'] = 'Tem a certeza que quer duplicar o cargo  \"$a->name ($a->shortname)\"?</p>';
$string['editrole'] = 'Editar cargo';
$string['errorbadrolename'] = 'Nome de cargo incorrecto';
$string['errorbadroleshortname'] = 'Nome de cargo incorrecto';
$string['errorexistsrolename'] = 'Nome de cargo já existente';
$string['errorexistsroleshortname'] = 'Nome de cargo já existente';
$string['existingusers'] = '$a utilizadores existentes';
$string['globalrole'] = 'Cargo global';
$string['globalroleswarning'] = 'AVISO! Qualquer cargo que atribua a partir desta página vai ser aplicada aos utilizadores de todo o sítio, incluindo página principal e todas as disciplinas.';
$string['grade:edit'] = 'Editar notas';
$string['grade:export'] = 'Exportar notas';
$string['grade:hide'] = 'Ocultar/mostrar notas ou pontos';
$string['grade:import'] = 'Importar notas';
$string['grade:lock'] = 'Congelar notas ou pontos';
$string['grade:manage'] = 'Gerir pontos das notas';
$string['grade:manageletters'] = 'Gerir notas em letras';
$string['grade:manageoutcomes'] = 'Gerir resultados das notas';
$string['grade:override'] = 'Alterar notas';
$string['grade:unlock'] = 'Descongelar notas ou pontos';
$string['grade:view'] = 'Ver as próprias notas';
$string['grade:viewall'] = 'Ver as notas de outros utilizadores';
$string['grade:viewhidden'] = 'Ver notas ocultas para o dono';
$string['inactiveformorethan'] = 'inactivo por mais de $a->timeperiod';
$string['ingroup'] = 'no grupo \"$a->group\"';
$string['inherit'] = 'Herdar';
$string['legacy:admin'] = 'DELEGAÇÃO de CARGO: Administrador';
$string['legacy:coursecreator'] = 'DELEGAÇÃO de CARGO: Criador de disciplina';
$string['legacy:editingteacher'] = 'DELEGAÇÃO de CARGO: Docente (editor)';
$string['legacy:guest'] = 'DELEGAÇÃO de CARGO: Visitante';
$string['legacy:student'] = 'DELEGAÇÃO de CARGO: Aluno';
$string['legacy:teacher'] = 'DELEGAÇÃO de CARGO: Docente (não editor)';
$string['legacy:user'] = 'DELEGAÇÃO de CARGO: Utilizador autenticado';
$string['legacytype'] = 'Tipo de delegação de cargo';
$string['listallroles'] = 'Mostrar lista de cargos';
$string['localroles'] = 'Cargos atribuídos localmente';
$string['manageroles'] = 'Gerir cargos';
$string['metaassignerror'] = 'Não se pode atribuir este cargo ao utilizador \"$a\" porque precisa permissão para gerir meta-disciplina.';
$string['metaunassignerror'] = 'O cargo do utilizador \"$a\" foi reatribuido automaticamente; por favor mude melhor cargo atribuído nas disciplinas descendentes.';
$string['morethan'] = 'Mais do que $a';
$string['multipleroles'] = 'Diversos cargos';
$string['my:manageblocks'] = 'Gerir blocos da página MeuMoodle';
$string['nocapabilitiesincontext'] = 'Não existem competências disponíveis neste contexto';
$string['notes:manage'] = 'Gerir notas';
$string['notes:view'] = 'Ver notas';
$string['notset'] = 'Não definido';
$string['overridepermissions'] = 'Revogar permissões';
$string['overridepermissionsin'] = 'Revogar permissões em $a';
$string['overrideroles'] = 'Revogar cargos';
$string['overriderolesin'] = 'Revogar cargos em $a';
$string['overrides'] = 'Revogações';
$string['permissions'] = 'Permissões';
$string['potentialusers'] = '$a utilizadores potenciais';
$string['prevent'] = 'Impedir';
$string['prohibit'] = 'Proibir';
$string['question:add'] = 'Adicionar novas perguntas';
$string['question:config'] = 'Configurar tipos de perguntas';
$string['question:editall'] = 'Editar todas as perguntas';
$string['question:editmine'] = 'Editar as suas próprias perguntas';
$string['question:managecategory'] = 'Gerir categorias de perguntas';
$string['question:moveall'] = 'Deslocar todas as perguntas';
$string['question:movemine'] = 'Deslocar as suas próprias perguntas';
$string['question:useall'] = 'Usar todas as perguntas';
$string['question:usemine'] = 'Usar as suas próprias perguntas';
$string['question:viewall'] = 'Ver todas as perguntas';
$string['question:viewmine'] = 'Ver as suas próprias perguntas';
$string['resetrole'] = 'Restaurar definições por omissão';
$string['resetrolenolegacy'] = 'Apagar permissões';
$string['resetrolesure'] = 'Tem a certeza que quer restaurar o cargo \"$a->name ($a->shortname)\" para o cargo definido por omissão? ?<p></p> Os restauros são retirados do legado seleccionado  ($a->legacytype).';
$string['resetrolesurenolegacy'] = 'Tem a certeza que quer apagar todas as permissões para este cargo \"$a->name ($a->shortname)\"?';
$string['risks'] = 'Riscos';
$string['role:assign'] = 'Atribuir cargos aos utilizadores';
$string['role:manage'] = 'Criar e editar cargos';
$string['role:override'] = 'Revogar cargos de outros';
$string['role:switchroles'] = 'Mudar os cargos';
$string['role:unassignself'] = 'Mudar o seu próprio cargo';
$string['role:viewhiddenassigns'] = 'Ver atribuições ocultas';
$string['roleassignments'] = 'Atribuição de cargos';
$string['roles'] = 'Cargos';
$string['roletoassign'] = 'Cargo a atribuir';
$string['roletooverride'] = 'Cargo a revogar';
$string['selectrole'] = 'Seleccione o cargo a atribuir';
$string['showallroles'] = 'Mostrar os cargos que podem ser atribuídos';
$string['site:accessallgroups'] = 'Ter acesso a todos os grupos';
$string['site:approvecourse'] = 'Aprovar criação de disciplinas';
$string['site:backup'] = 'Fazer cópias de segurança das disciplinas';
$string['site:config'] = 'Mudar configurações do sítio';
$string['site:doanything'] = 'Autorizado a fazer tudo';
$string['site:doclinks'] = 'Mostrar apontadores para documentos de outros sítios';
$string['site:import'] = 'Importar outras disciplinas dentro duma disciplina';
$string['site:langeditlocal'] = 'Alterar a tradução local';
$string['site:langeditmaster'] = 'Editar pacotes linguísticos originais';
$string['site:manageblocks'] = 'Gerir blocos a nível do sítio';
$string['site:mnetloginfromremote'] = 'Entrar a partir de um Moodle remoto';
$string['site:mnetlogintoremote'] = 'Navegar para um Moodle remoto.';
$string['site:readallmessages'] = 'Ler todas as mensagens no sítio';
$string['site:restore'] = 'Recuperar disciplinas';
$string['site:sendmessage'] = 'Enviar mensagens a qualquer utilizador';
$string['site:trustcontent'] = 'Confiar no conteúdo enviado';
$string['site:uploadusers'] = 'Enviar ficheiro com novos utilizadores';
$string['site:viewfullnames'] = 'Ver sempre o nome completo dos utilizadores';
$string['site:viewparticipants'] = 'Ver os participantes';
$string['site:viewreports'] = 'Ver relatórios';
$string['tag:create'] = 'Criar novas palavras chave';
$string['tag:edit'] = 'Editar palavras chave existentes';
$string['tag:editblocks'] = 'Editar blocos nas páginas de palavras chave';
$string['tag:manage'] = 'Gerir todas as palavras chave';
$string['user:changeownpassword'] = 'Mudar a sua própria senha';
$string['user:create'] = 'Criar utilizadores';
$string['user:delete'] = 'Apagar utilizadores';
$string['user:editownprofile'] = 'Editar o seu próprio perfil';
$string['user:editprofile'] = 'Editar perfis de utilizadores';
$string['user:loginas'] = 'Entrar como outros utilizadores';
$string['user:readuserblogs'] = 'Ver todos os blogues de utilizadores';
$string['user:readuserposts'] = 'Ver todas as mensagens enviadas pelos utilizadores';
$string['user:update'] = 'Actualizar perfis de utilizadores';
$string['user:viewdetails'] = 'Ver perfis de utilizadores';
$string['user:viewhiddendetails'] = 'Ver dados de utilizador ocultos';
$string['user:viewuseractivitiesreport'] = 'Ver relatórios de actividade ocultos';
$string['user:viewusergrades'] = 'Ver notas dos utilizadores';
$string['viewrole'] = 'Ver pormenores dos cargos atribuídos';
$string['xuserswiththerole'] = 'Utilizadores com o cargo \"$a->role\": $a->number';
$string['question:export'] = 'Exportar perguntas'; // ORPHANED
$string['question:import'] = 'Importar perguntas'; // ORPHANED
$string['question:manage'] = 'Gerir perguntas'; // ORPHANED

$string['allsiteusers'] = 'Todos os utilizadores da plataforma';
$string['backup:userinfo'] = 'Backup da informação de utilizador';
$string['category:manage'] = 'Gerir categorias';
$string['category:viewhiddencategories'] = 'Ver categorias ocultas';
$string['course:changecategory'] = 'Mudar categoria de disciplina';
$string['course:changefullname'] = 'Mudar nome completo da disciplina';
$string['course:changeidnumber'] = 'Mudar ID da disciplina';
$string['course:changeshortname'] = 'Mudar nome curto da disciplina';
$string['course:changesummary'] = 'Mudar sumário da disciplina';
$string['course:request'] = 'Pedir novas disciplinas';
$string['restore:createuser'] = 'Criar utilizadores no restauro';
$string['restore:rolldates'] = 'Allowed to roll activity configuration dates on restore';
$string['restore:userinfo'] = 'Restaurar informação de utilizador';
$string['role:safeoverride'] = 'Override safe permissions for others';
$string['userswithrole'] = 'Todos os utilizadores com um cargo';


?>