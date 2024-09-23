<?php
ini_set('display_errors', 0);
$titulo = "Página não encontrada";
    $descricao = 'Retorne para a página inicial';
    $indexacao = "noindex";

include('core/database/db_connection.php');
include('core/partials/header.php');
// http_response_code(404);

?>

<main id="content" class="pagina-bula pagina-produto">
     <section class="banner-pagina p-md-3 p-mobile-3">
          <div class="container d-grid position-relative">
               <ol class="breadcrumbs">
                    <li><a class="link" href="/">Home</a></li>
                    <li>></li>
                    <li><a class="link" href="/produtos">Produtos</a></li>
                    <li>></li>
                    <li><a class="link" href="/benegrip-multi">Benegrip<sup>®</sup> Multi</a></li>
                    <li class="d-none-mobile">></li>
                    <li class="d-none-mobile"><span class="texto">Bula Benegrip<sup>®</sup> Multi</span></li>
               </ol>

               <h1 class="mt-5">
                    Bula<br>
                    <span class="h2 mt-5">Benegrip<sup>®</sup> Multi</span>
               </h1>
               <p>(paracetamol + cloridrato de fenilefrina + maleato de carbinoxamina)</p>

               <ul class="mt-3">
                    <li><a class="fw-bold" href="#bula-titulo-1">I - Identificação do medicamento <span class="material-symbols-rounded align-middle">expand_more</span></a></li>
                    <li class="mt-3"><a class="fw-bold" href="#bula-titulo-2">II - Informações ao paciente <span class="material-symbols-rounded align-middle">expand_more</span></a></li>
                    <li class="mt-3"><a class="fw-bold" href="#bula-titulo-3">III - Dizeres legais <span class="material-symbols-rounded align-middle">expand_more</span></a></li>
               </ul>

               <picture class="secao-imagem">
                    <source srcset="/assets/images/produtos/benegrip-multi.webp" media="(max-width: 720px)">
                    <source srcset="/assets/images/produtos/benegrip-multi.webp" media="(max-width: 1280px)">
                    <source srcset="/assets/images/produtos/benegrip-multi.webp">
                    <img loading="lazy" src="/assets/images/produtos/benegrip-multi.webp" class="imagem mw-100" alt="Foto da embalagem de Benegrip<sup>®</sup> Multi.">
               </picture>
          </div>
     </section>

     <section class="secao-conteudo-bula py-5">
          <div class="container">
               <div class="mb-5">
                    <h2 class="accordion-header" id="bula-titulo-1">
                         <button class="accordion-button text-uppercase fw-bold h5 bg-primaria-50 rounded p-3" type="button" data-bs-toggle="collapse" data-bs-target="#bula-conteudo-1" aria-expanded="true" aria-controls="bula-titulo-1">I - Identificação do medicamento</button>
                    </h2>
                    <div id="bula-conteudo-1" class="accordion-collapse mt-3 collapse show" aria-labelledby="bula-titulo-1">
                         <div class="accordion-body">

                              <h3 class="text-dark h6">Benegrip<sup>®</sup> Multi paracetamol + cloridrato de fenilefrina + maleato de carbinoxamina</h3><br>

                              <h3 class="text-dark h6">APRESENTAÇÕES</h3>
                              <p>
                                   Solução.<br>
                                   Embalagem contendo 1 frasco de 240mL, acompanhado com copo dosador
                              </p>

                              <h3 class="text-dark h6">VIA DE ADMINISTRAÇÃO: ORAL USO ADULTO</h3><br>

                              <h3 class="text-dark h6">COMPOSIÇÃO:</h3>
                              <p>
                                   Cada mL da solução contém:<br>
                                   paracetamol ............................................ 13,30mg<br>
                                   cloridrato de fenilefrina ............................ 0,33mg<br>
                                   maleato de carbinoxamina ....................... 0,13mg<br>
                                   veículo q.s.p. ................................................ 1mL<br>
                                   (propilenoglicol, glicerol, ácido cítrico, citrato de sódio di-hidratado, edetato dissódico di-hidratado, benzoato de sódio, sucralose, metabissulfito de sódio, cloridrato de lisina, vermelho de eritrosina dissódica, aroma idêntico ao natural de frutas vermelhas e água).
                              </p>
                         </div>
                    </div>
               </div>

               <div class="mb-5">
                    <h2 class="accordion-header" id="bula-titulo-2">
                         <button class="accordion-button text-uppercase fw-bold h5 bg-primaria-50 rounded p-3" type="button" data-bs-toggle="collapse" data-bs-target="#bula-conteudo-2" aria-expanded="true" aria-controls="bula-titulo-2">II - Informações ao paciente</button>
                    </h2>
                    <div id="bula-conteudo-2" class="accordion-collapse mt-3 collapse show" aria-labelledby="bula-titulo-2">
                         <div class="accordion-body">
                              <h3 class="text-dark h6">1. PARA QUE ESTE MEDICAMENTO É INDICADO?</h3>
                              <p>Benegrip<sup>®</sup> Multi (paracetamol + cloridrato de fenilefrina + maleato de carbinoxamina) é indicado como analgésico e antitérmico e ainda nos processos que envolvem as vias aéreas superiores como descongestionante nasal.</p><br>


                              <h3 class="text-dark h6">2. COMO ESTE MEDICAMENTO FUNCIONA?</h3>
                              <p>Benegrip<sup>®</sup> Multi é construído por uma associação, cujo componente básico é o paracetamol, estando indicado nos processos das vias aéreas superiores, nos quais a dor e a febre fazem parte do quadro.</p><br>

                              <h3 class="text-dark h6">3. QUANDO NÃO DEVO USAR ESTE MEDICAMENTO?</h3>
                              <p>
                                   Em caso de alergia a algum dos componentes da fórmula, a administração do produto deve ser descontinuada. Nos 3 primeiros meses de gravidez e após este período deverá ser administrado apenas em casos de necessidade, sob controle médico. É contraindicado a pacientes com glaucoma de ângulo estreito.<br>
                                   <b>Este medicamento é contraindicado para menores de 2 anos.</b><br>
                                   A amamentação deve ser evitada durante e até 48 horas após o uso deste medicamento devido a possível excreção pelo leite materno.<br>
                                   <b>Informar ao médico se está amamentando.</b>
                              </p><br>

                              <h3 class="text-dark h6">4. O QUE DEVO SABER ANTES DE USAR ESTE MEDICAMENTO?</h3>
                              <p>
                                   Pacientes com problemas cardíacos, pressão alta, asma, diabetes, problemas de tireoide, e problemas hepáticos, deverão estar sob supervisão médica para fazer uso de Benegrip<sup>®</sup> Multi. Deve ser administrado com cautela em pacientes com funções renais ou hepáticas comprometidas. Embora haja poucos relatos de disfunção hepática nas doses habituais de paracetamol, é aconselhável monitorar-se a função hepática nos casos de uso prolongado. Não utilizar Benegrip<sup>®</sup> Multi com outros medicamentos que contenham paracetamol em sua formulação devido ao risco de toxicidade hepática.<br>
                                   <b>Não use outro produto que contenha Paracetamol.</b><br>
                                   <b>Este medicamento não deve ser utilizado por mulheres grávidas sem orientação médica ou do cirurgião-dentista.</b><br>
                                   <b>Interações medicamentosas:</b> deve ser usado com cautela em pacientes que fazem uso regular de álcool e barbitúricos, devido ao risco de sobrecarga metabólica ou possível agravamento de um comprometimento hepático já existente.<br>
                                   Não deve ser utilizado concomitantemente com barbitúricos, antidepressivos tricíclicos e carbamazepina, devido ao aumento do risco de hepatotoxicidade.<br>
                                   Não deve ser utilizado concomitantemente com antidepressivos inibidores da MAO ou outras drogas de efeito hipertensor pelo risco de hipertensão.<br>
                                   <b>Informe ao seu médico ou cirurgião-dentista se você está fazendo uso de algum outro medicamento.</b><br>
                                   <b>Durante o tratamento, o paciente não deve dirigir veículos ou operar máquinas, pois sua habilidade e atenção podem estar prejudicadas.</b>
                              </p><br>

                              <h3 class="text-dark h6">5. ONDE, COMO E POR QUANTO TEMPO POSSO GUARDAR ESTE MEDICAMENTO?</h3>
                              <p>Conservar em temperatura ambiente (entre 15 e 30°C). Proteger da luz e umidade.</p>
                              <h3 class="text-dark h6">Número de lote e datas de fabricação e validade: vide embalagem.</h3>
                              <h3 class="text-dark h6">Não use medicamento com o prazo de validade vencido. Guarde-o em sua embalagem original.</h3>
                              <p>Benegrip<sup>®</sup> Multi apresenta-se como solução límpida de coloração vermelha com odor e sabor frutas vermelhas e isenta de partículas estranhas.</p>
                              <h3 class="text-dark h6">
                                   Antes de usar, observe o aspecto do medicamento. Caso ele esteja no prazo de validade e você observe alguma mudança no aspecto, consulte o farmacêutico para saber se poderá utilizá-lo.<br>
                                   Todo medicamento deve ser mantido fora do alcance das crianças.
                              </h3><br>

                              <h3 class="text-dark h6">6. COMO DEVO USAR ESTE MEDICAMENTO?</h3>
                              <h3 class="text-dark h6">USO ORAL</h3>
                              <h3 class="text-dark h6">USO ADULTO E PEDIÁTRICO ACIMA DE 2 ANOS</h3>
                              <p>Modo de usar:</p>
                              <h3 class="text-dark h6">Crianças até 12 anos:</h3>
                              <p>Usar de acordo com a tabela abaixo:</p><br>

                              <table class="table w-25 text-center table-striped">
                                   <thead>
                                        <tr>
                                             <th scope="col">Peso</th>
                                             <th scope="col">mL/dose</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        <tr>
                                             <td scope="col">12kg</td>
                                             <td scope="col">9,0mL</td>
                                        </tr>
                                        <tr>
                                             <td scope="col">14kg</td>
                                             <td scope="col">10,5mL</td>
                                        </tr>
                                        <tr>
                                             <td scope="col">16kg</td>
                                             <td scope="col">12,0mL</td>
                                        </tr>
                                        <tr>
                                             <td scope="col">18kg</td>
                                             <td scope="col">13,5mL</td>
                                        </tr>
                                        <tr>
                                             <td scope="col">20kg</td>
                                             <td scope="col">15,0mL</td>
                                        </tr>
                                        <tr>
                                             <td scope="col">22kg</td>
                                             <td scope="col">16,5mL</td>
                                        </tr>
                                        <tr>
                                             <td scope="col">24kg</td>
                                             <td scope="col">18,0mL</td>
                                        </tr>
                                        <tr>
                                             <td scope="col">26kg</td>
                                             <td scope="col">19,5mL</td>
                                        </tr>
                                        <tr>
                                             <td scope="col">28kg</td>
                                             <td scope="col">21,0mL</td>
                                        </tr>
                                        <tr>
                                             <td scope="col">30kg</td>
                                             <td scope="col">22,5mL</td>
                                        </tr>
                                   </tbody>
                              </table>

                              <p>Administrar a dose indicada a cada 6 horas. Não exceder 4 doses em 24 horas.</p>
                              <p>
                                   <b>Adultos e crianças acima de 12 anos</b>: 1 copo dosador (30mL) a cada 6 horas.<br>
                                   Não exceder 4 doses em 24 horas.
                              </p>
                              <h3 class="text-dark h6">
                                   Não deve ser administrado em crianças menores de 2 anos.<br>
                                   Siga corretamente o modo de usar. Em caso de dúvidas sobre este medicamento, procure orientação do farmacêutico. Não desaparecendo os sintomas, procure orientação de seu médico ou cirurgião-dentista.
                              </h3><br>

                              <h3 class="text-dark h6">7. O QUE DEVO FAZER QUANDO EU ME ESQUECER DE USAR ESTE MEDICAMENTO?</h3>
                              <p>Não há motivos significativos para se preocupar caso se esqueça de utilizar o medicamento. Caso necessite utilizá-lo novamente, retome o seu uso da maneira recomendada, respeitando os intervalos e horários estabelecidos, não devendo dobrar a dose porque se esqueceu de tomar a anterior.</p>
                              <h3 class="text-dark h6">Em caso de dúvidas, procure orientação do farmacêutico ou de seu médico, ou cirurgiãodentista.</h3><br><br>

                              <h3 class="text-dark h6">8. QUAIS OS MALES QUE ESTE MEDICAMENTO PODE ME CAUSAR?</h3>
                              <p>
                                   Raramente se observam reações de hipersensibilidade, mas se isto ocorrer deve-se interromper a administração da droga. Também foram mencionados outros efeitos adversos como náusea, vômito, dor abdominal, hipotermia, palpitação, palidez. Sob o uso prolongado podem surgir discrasias sanguíneas. A literatura a respeito do paracetamol relata casos de trombocitopenia, pancitopenia, agranulocitose, anemia hemolítica e meta-hemoglobina, já tendo sido relatados casos de aplasia medular. O uso prolongado pode causar necrose papilar renal. Reações cutâneas têm sido relatadas e incluem principalmente eritema e urticária. Dependendo da sensibilidade individual do paciente. Leve sonolência poderá ocorrer após a 1ª dose; por este motivo recomenda-se aos pacientes, especial cuidado ao executarem trabalhos mecânicos que requeiram atenção até que sua reação seja determinada. Podem ocorrer também nervosismo e tremores devido à fenilefrina.<br>
                                   <b>Informe ao seu médico, cirurgião-dentista ou farmacêutico o aparecimento de reações indesejáveis pelo uso do medicamento. Informe também à empresa através do seu serviço de atendimento.</b>
                              </p><br>

                              <h3 class="text-dark h6">9. O QUE FAZER SE ALGUÉM USAR UMA QUANTIDADE MAIOR DO QUE A INDICADA DESTE MEDICAMENTO?</h3>
                              <p>
                                   Nos casos de ingestão excessiva de paracetamol, a partir de 650mg por dose a 4g por dia em doses divididas, o paciente deve ser monitorizado até que o médico esteja certo de não haver hepatotoxicidade. Os sinais iniciais de superdose incluem: vômitos, náuseas/dor no quadrante superior do abdômen, palidez cutânea. As evidências clínicas e laboratoriais da hepatotoxicidade podem não ser aparentes até 24 a 48 horas após a ingestão, portanto recomenda-se que o paciente fique em observação durante este período.<br>
                                   O tratamento deve ser iniciado o mais rápido possível, o estômago deve ser esvaziado até 1 hora após a ingestão através de aspiração gástrica e lavagem. Recomenda-se também a administração de carvão ativado, pois o paracetamol é bem adsorvido.<br>
                                   A estimativa da quantidade ingerida, principalmente se fornecida pelo paciente, não é um dado confiável. Portanto, a determinação da concentração sérica do paracetamol deve ser obtida o mais rápido possível, mas não antes de 4 horas após a ingestão.<br>
                                   Determinação da função hepática deve ser obtida inicialmente e a seguir a cada 24 horas durante 3 dias. O antídoto, N-acetilcisteína, deve ser administrado com urgência e dentro das 16 primeiras horas após a ingestão para se obter bons resultados. O seguinte esquema pode ser utilizado, usando N-acetilcisteína injetável; dose inicial de 150mg/Kg de peso, intravenosa por 15 minutos, seguida de infusão de 50mg/Kg de peso em 500mL dextrose 5% por 4 horas e a seguir 100mg/Kg de peso em 1 litro de dextrose 5% nas próximas 16 horas (totalizando 300mg/Kg de peso em 20 horas). Os principais sinais de superdosagem relacionados à fenilefrina são aumento da pressão arterial, taquicardia, tremores e arritmias cardíacas. O paciente deve receber suporte cardiovascular e tratamento sintomático.<br>
                                   <b>Em caso de uso de grande quantidade deste medicamento, procure rapidamente socorro médico e leve a embalagem ou bula do medicamento, se possível. Ligue para 0800 722 6001, se você precisar de mais orientações.</b>
                              </p><br>
                         </div>
                    </div>
               </div>

               <div class="mb-5">
                    <h2 class="accordion-header" id="bula-titulo-3">
                         <button class="accordion-button text-uppercase fw-bold h5 bg-primaria-50 rounded p-3" type="button" data-bs-toggle="collapse" data-bs-target="#bula-conteudo-3" aria-expanded="true" aria-controls="bula-titulo-3">III - Dizeres legais</button>
                    </h2>
                    <div id="bula-conteudo-3" class="accordion-collapse mt-3 collapse show" aria-labelledby="bula-titulo-3">
                         <div class="accordion-body">
                              <p>
                                   Registro M.S. nº 1.7817.0768<br>
                                   Farm. Responsável: Luciana Lopes da Costa<br>
                                   CRF-GO nº 2.757
                              </p><br>

                              <b>SIGA CORRETAMENTE O MODO DE USAR, NÃO DESAPARECENDO OS SINTOMAS PROCURE ORIENTAÇÃO MÉDICA.</b><br><br>

                              <b>REGISTRADO POR: COSMED INDÚSTRIA DE COSMÉTICOS E MEDICAMENTOS S.A.</b><br>
                              <b>Rua Bonnard (Green Valley I), nº 980 - Bloco 12, Nível 3, Sala A - Alphaville Empresarial Barueri - SP - CEP 06465-134</b><br>
                              <b>C.N.P.J.: 61.082.426/0002-07</b><br>
                              <b>Indústria Brasileira</b><br><br>

                              <b>Fabricado por: Brainfarma Indústria Química e Farmacêutica S.A.</b><br>
                              <b>VPR 1 - Quadra 2-A - Módulo 4 - DAIA - Anápolis - GO - CEP 75132-020</b>
                         </div>
                    </div>
               </div>

               <div class="d-flex align-items-center my-5 flex-column gap-3">
                    <p class="h1 text-center">SAC 0800 97 99 900</p>
                    <a class="btn btn-primary" href="/assets/files/bula-benegrip-multi.pdf" target="_blank">Bula completa</a>
               </div>
          </div>
     </section>
</main>


</main>

<?php include('core/partials/footer.php'); ?>