<?
	// Verificar se tá logado

?>

<div class="col-md-8 col-md-offset-2 col-sm-12">
	<div class="center">
		<h1>Seja bem vindo ao MER ENEM, <?php echo " raulj" ?> </h1>
		<button onclick="window.location.href='createSimu'" type="button" class="btn btn-primary">Criar Simulado</button>
		<button type="button" class="btn btn-success">undefined</button>
		<button type="button" class="btn btn-info">undefined</button>
		<button type="button" class="btn btn-warning">undefined</button>
	</div>
</div>

<!-- <article role="complementary" class="row questions" ng-controller="questionController as questionCtrl">
	<div class="col-xs-offset-2 col-xs-8 container-questions animate-hide" ng-show="questionCtrl.ready == true">
		<div class="single-question animate-hide" ng-show="questionCtrl.end || questionCtrl.current == $index" ng-repeat="question in questionCtrl.list" id="question-{{ $index }}">
			<div>
				<h1><strong>#{{ $index + 1 }}</strong> - {{ question.statement }}</h1>

				<div class="options" ng-repeat="opt in ['a', 'b', 'c', 'd', 'e']" ng-hide="questionCtrl.validateQuestion(this, opt) == false">
					<input value="{{ opt }}" id="{{ $parent.$index }}-{{ opt }}" type="radio" name="in-question-{{ $parent.$index }}" ng-disabled="questionCtrl.end" />
					<label data-letter="{{ opt }}" for="{{ $parent.$index }}-{{ opt }}">{{ questionCtrl.validateQuestion(this, opt) }}</label>
				</div>
			</div>
			<button ng-hide="questionCtrl.end" ng-click="questionCtrl.answer()">Responder</button>
			<div class="results" ng-show="questionCtrl.end">
				<span class="success" ng-if="questionCtrl.ans[$index] == question.answer">
					Você acertou.
				</span>
				<span class="error" ng-if="questionCtrl.ans[$index] != question.answer">
					Você errou. Resposta: {{ question.answer }}
				</span>
			</div>
		</div>
	</div>
</article>
