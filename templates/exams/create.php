<?php

?>
<nav class="navbar navbar-inverse navbar-fixed-top">
		 <div class="container-fluid">
			 <div class="navbar-header">
				 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					 <span class="sr-only">Toggle navigation</span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
				 </button>
				 <a class="navbar-brand" href="#">REP Simulation</a>
			 </div>
			 <div id="navbar" class="navbar-collapse collapse">
			 </div>
		 </div>
	 </nav>

	 <div class="container-fluid">
		 <div class="row">
			 <div class="col-sm-3 col-md-2 sidebar">
				 <ul class="nav nav-sidebar">
					 <li><a href="index">Home<span class="sr-only">(current)</span></a></li>
						<li class="active"><a href="createSimu">Responder Questions</a></li>
				 </ul>
			 </div>
			 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				 <h1 class="page-header">Seja Bem vindo, <?php echo "Raul Julian" ;  ?></h1>
				 <h2 class="sub-header">Você agora participa do melhor simulador online para o ENEM</h2>
         <article role="complementary" class="row questions" ng-controller="questionController as questionCtrl">
         	<div class="col-xs-offset-2 col-xs-8 container-questions animate-hide" ng-show="questionCtrl.ready == true">
         		<div class="single-question animate-hide" ng-show="questionCtrl.end || questionCtrl.current == $index" ng-repeat="question in questionCtrl.list" id="question-{{ $index }}">
         			<div>
         				<h4><strong>#{{ $index + 1 }}</strong> - {{ question.statement }}</h4>

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
			 </div>
		 </div>
	 </div>
