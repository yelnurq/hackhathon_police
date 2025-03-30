<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingController extends Controller
{
    protected $scenarios = [
'hostage' => [
    'title' => 'Захват заложников',
    'image' => 'images/hostage.svg',
    'description' => 'Вы находитесь в ситуации захвата заложников, ваша задача - правильно реагировать.',
    'scenes' => [
        1 => [
            'content' => 'Вы прибыли на место инцидента. Преступники захватили заложников в здании. Что будете делать?',
            'answers' => [
                'a' => [
                    'answer' => 'Попробовать договориться с преступниками.',
                    'next_scene' => 2,
                    'image' => 'images/dogovor.svg'  
                ],
                'b' => [
                    'answer' => 'Попробовать захватить преступников силой.',
                    'next_scene' => 3,
                    'image' => 'images/attack.svg' 
                ],
                'c' => [
                    'answer' => 'Попробовать скрытно проникнуть в здание.',
                    'next_scene' => 4,
                    'image' => 'images/stels.svg'  
                ]
            ]
        ],
        2 => [
            'content' => 'Вы начали переговоры. Преступники предлагают вам обменять заложников на деньги. Как вы ответите?',
            'answers' => [
                'a' => [
                    'answer' => 'Согласиться на обмен.',
                    'next_scene' => 5,
                    'image' => 'images/dogovor.svg' 
                ],
                'b' => [
                    'answer' => 'Отказаться от обмена и попытаться напасть.',
                    'next_scene' => 6,
                    'image' => 'images/attack.svg' 
                ],
                'c' => [
                    'answer' => 'Предложить им выйти с заложниками на улицу для обмена.',
                    'next_scene' => 7,
                    'image' => 'images/dogovor.svg' 
                ]
            ]
        ],
        3 => [
            'content' => 'Вы решили атаковать. Преступники начали стрелять. Как будете действовать?',
            'answers' => [
                'a' => [
                    'answer' => 'Отступить и вызвать подкрепление.',
                    'next_scene' => 8,
                    'image' => 'images/attack.svg'  
                ],
                'b' => [
                    'answer' => 'Попробовать нейтрализовать преступников сразу.',
                    'next_scene' => 9,
                    'image' => 'images/attack.svg'  
                ],
                'c' => [
                    'answer' => 'Использовать дымовые шашки для прикрытия.',
                    'next_scene' => 10,
                    'image' => 'images/stels.svg'  
                ]
            ]
        ],
        4 => [
            'content' => 'Вы пробрались внутрь, но вас заметили охранники. Как будете действовать?',
            'answers' => [
                'a' => [
                    'answer' => 'Попробовать обезвредить охранников и продолжить движение.',
                    'next_scene' => 11,
                    'image' => 'images/stels.svg' 
                ],
                'b' => [
                    'answer' => 'Уйти назад и попытаться изменить план.',
                    'next_scene' => 12,
                    'image' => 'images/stels.svg'  
                ],
                'c' => [
                    'answer' => 'Задержать охранников и попытаться собрать информацию.',
                    'next_scene' => 13,
                    'image' => 'images/stels.svg'  
                ]
            ]
        ],
        5 => [
            'content' => 'Обмен заложников прошел успешно. Вы спасли всех заложников, но преступники смогли скрыться.',
            'answers' => [
                'end' => [
                    'answer' => 'Завершить сценарий.',
                    'next_scene' => null,
                    'image' => 'images/success.png' 

                ]
            ]
        ],
        6 => [
            'content' => 'Нападение прошло неудачно. Преступники убили одного заложника и скрылись.',
            'answers' => [
                'end' => [
                    'answer' => 'Завершить сценарий.',
                    'next_scene' => null,
                    'image' => 'images/unsuccess.png'  

                ]
            ]
        ],
        7 => [
            'content' => 'Обмен прошел успешно, но по дороге преступники оказались с оружием. Что делать?',
            'answers' => [
                'a' => [
                    'answer' => 'Попробовать захватить преступников, рискуя жизнями заложников.',
                    'next_scene' => 14,
                    'image' => 'images/attack.svg'  
                ],
                'b' => [
                    'answer' => 'Предложить сделку, чтобы вернуть заложников.',
                    'next_scene' => 15,
                    'image' => 'images/dogovor.svg' 
                ],
                'c' => [
                    'answer' => 'Использовать спецсредства для контроля ситуации.',
                    'next_scene' => 16,
                    'image' => 'images/stels.svg'  
                ]
            ]
        ],
        8 => [
            'content' => 'Вы отступили и вызвали подкрепление. Дальше нужно действовать с большой осторожностью.',
            'answers' => [
                'a' => [
                    'answer' => 'Дождаться подкрепления и атаковать с новым планом.',
                    'next_scene' => 17,
                    'image' => 'images/attack.svg'  
                ],
                'b' => [
                    'answer' => 'Продолжить переговоры, надеясь, что преступники не будут продолжать насилие.',
                    'next_scene' => 18,
                    'image' => 'images/dogovor.svg'  
                ],
                'c' => [
                    'answer' => 'Попробовать скрытно проникнуть в здание и устранить преступников.',
                    'next_scene' => 19,
                    'image' => 'images/stels.svg'  
                ]
            ]
        ],
        9 => [
            'content' => 'Ваша атака привела к потере нескольких сотрудников, но вы все-таки обезвредили преступников.',
            'answers' => [
                'end' => [
                    'answer' => 'Завершить сценарий.',
                    'next_scene' => null,
                    'image' => 'images/unsuccess.png' 

                ]
            ]
        ],
        10 => [
            'content' => 'Использование дымовых шашек позволило скрыться, и вы смогли обезвредить преступников.',
            'answers' => [
                'end' => [
                    'answer' => 'Завершить сценарий.',
                    'next_scene' => null,
                    'image' => 'images/success.png'  

                ]
            ]
        ],
        11 => [
            'content' => 'Вы обезвредили охранников, но один из них успел позвать подкрепление. Нужно действовать быстро.',
            'answers' => [
                'a' => [
                    'answer' => 'Попробовать скрыться с местом преступления.',
                    'next_scene' => 20,
                    'image' => 'images/stels.svg' 
                ],
                'b' => [
                    'answer' => 'Задержать новых охранников и продолжить задание.',
                    'next_scene' => 21,
                    'image' => 'images/stels.svg' 
                ],
                'c' => [
                    'answer' => 'Атаковать подкрепление с максимальной жестокостью.',
                    'next_scene' => 22,
                    'image' => 'images/attack.svg'  
                ]
            ]
        ],
        12 => [
            'content' => 'Вы решили уйти назад и изменить стратегию. Преступники заметили ваше отступление и начали погоню.',
            'answers' => [
                'a' => [
                    'answer' => 'Попробовать скрыться и вернуться с подкреплением.',
                    'next_scene' => 23,
                    'image' => 'images/stels.svg'  
                ],
                'b' => [
                    'answer' => 'Использовать дымовые шашки для прикрытия.',
                    'next_scene' => 24,
                    'image' => 'images/stels.svg'  
                ],
                'c' => [
                    'answer' => 'Сдаться и попытаться договориться.',
                    'next_scene' => 25,
                    'image' => 'images/dogovor.svg' 
                ]
            ]
        ],
        13 => [
            'content' => 'Вы задержали охранников и теперь можете собрать информацию о местоположении преступников.',
            'answers' => [
                'a' => [
                    'answer' => 'Продолжить расследование и найти преступников.',
                    'next_scene' => 26,
                    'image' => 'images/stels.svg' 
                ],
                'b' => [
                    'answer' => 'Попробовать переговорить с заложниками.',
                    'next_scene' => 27,
                    'image' => 'images/dogovor.svg'  
                ],
                'c' => [
                    'answer' => 'Организовать засаду для захвата преступников.',
                    'next_scene' => 28,
                    'image' => 'images/attack.svg' 
                ]
            ]
        ]
    ]
],

'cybercrime' => [
    'title' => 'Киберпреступления',
    'image' => 'images/cyber.svg',
    'description' => 'Вы работаете в кибербезопасности. Вашей задачей является предотвратить попытку взлома. Что вы будете делать?',
    'scenes' => [
        1 => [
            'content' => 'Вы получили сообщение о попытке взлома. Преступник пытается получить доступ к серверу. Какие ваши действия?',
            'answers' => [
                'a' => [
                    'answer' => 'Попытаться заблокировать доступ к серверу.',
                    'next_scene' => 2,
                    'image' => 'images/cyber1.svg'
                ],
                'b' => [
                    'answer' => 'Попытаться отслеживать IP-адрес преступника.',
                    'next_scene' => 3,
                    'image' => 'images/cyber2.svg'
                ],
                'c' => [
                    'answer' => 'Запустить программу для выявления уязвимостей системы.',
                    'next_scene' => 4,
                    'image' => 'images/base.svg'
                ]
            ]
        ],
        2 => [
            'content' => 'Вы заблокировали доступ. Преступник пытается подключиться с другого IP. Что делать?',
            'answers' => [
                'a' => [
                    'answer' => 'Отслеживать IP и попытаться поймать преступника.',
                    'next_scene' => 5,
                    'image' => 'images/cyber1.svg'
                ],
                'b' => [
                    'answer' => 'Принять меры по усилению безопасности системы.',
                    'next_scene' => 6,
                    'image' => 'images/cyber2.svg'
                ],
                'c' => [
                    'answer' => 'Запустить систему мониторинга для обнаружения повторных попыток.',
                    'next_scene' => 7,
                    'image' => 'images/base.svg'
                ]
            ]
        ],
        3 => [
            'content' => 'Вы отслеживаете IP-адрес, но преступник использует VPN. Каковы ваши дальнейшие действия?',
            'answers' => [
                'a' => [
                    'answer' => 'Попробовать установить ловушку на сервере.',
                    'next_scene' => 8,
                    'image' => 'images/trap.svg'
                ],
                'b' => [
                    'answer' => 'Ожидать, что преступник будет снова действовать.',
                    'next_scene' => 9,
                    'image' => 'images/dogovor.svg'
                ],
                'c' => [
                    'answer' => 'Использовать машину обучения для анализа поведения атакующего.',
                    'next_scene' => 10,
                    'image' => 'images/cyber2.svg'
                ]
            ]
        ],
        4 => [
            'content' => 'Вы запустили программу и нашли уязвимость в системе. Как будете действовать?',
            'answers' => [
                'a' => [
                    'answer' => 'Попробовать исправить уязвимость и защитить сервер.',
                    'next_scene' => 11,
                    'image' => 'images/cyber2.svg'
                ],
                'b' => [
                    'answer' => 'Оповестить руководство о возможной угрозе.',
                    'next_scene' => 12,
                    'image' => 'images/base.svg'
                ],
                'c' => [
                    'answer' => 'Закрыть сервер и активировать резервную защиту.',
                    'next_scene' => 13,
                    'image' => 'images/cyber1.svg'
                ]
            ]
        ],
        5 => [
            'content' => 'Вы поймали преступника, система безопасности была не повреждена.',
            'answers' => [
                'end' => [
                    'answer' => 'Завершить сценарий.',
                    'next_scene' => null,
                    'image' => 'images/success.png' 
                ]
            ]
        ],
        6 => [
            'content' => 'Вы улучшили безопасность, но преступник все равно смог взломать систему.',
            'answers' => [
                'end' => [
                    'answer' => 'Завершить сценарий.',
                    'next_scene' => null,
                    'image' => 'images/unsuccess.png'  
                ]
            ]
        ],
        7 => [
            'content' => 'Система мониторинга обнаружила повторные попытки взлома.',
            'answers' => [
                'a' => [
                    'answer' => 'Заблокировать все попытки подключения.',
                    'next_scene' => 14,
                    'image' => 'images/trap.svg'
                ],
                'b' => [
                    'answer' => 'Подключить дополнительные ресурсы для расследования.',
                    'next_scene' => 15,
                    'image' => 'images/cyber1.svg'
                ]
            ]
        ],
        8 => [
            'content' => 'Вы установили ловушку, но преступник снова использовал VPN. Ваши действия?',
            'answers' => [
                'end' => [
                    'answer' => 'Завершить сценарий.',
                    'next_scene' => null,
                    'image' => 'images/unsuccess.png'  

                ]
            ]
        ],
        9 => [
            'content' => 'Вы ожидали преступника, но он не пришел. Система была защищена.',
            'answers' => [
                'end' => [
                    'answer' => 'Завершить сценарий.',
                    'next_scene' => null,
                    'image' => 'images/success.png'  

                ]
            ]
        ],
        10 => [
            'content' => 'Анализ машинного обучения помог найти закономерности в атаках.',
            'answers' => [
                'end' => [
                    'answer' => 'Завершить сценарий.',
                    'next_scene' => null,
                    'image' => 'images/success.png' 

                ]
            ]
        ],
        11 => [
            'content' => 'Уязвимость была исправлена, и атакующий не смог проникнуть в систему.',
            'answers' => [
                'end' => [
                    'answer' => 'Завершить сценарий.',
                    'next_scene' => null,
                    'image' => 'images/success.png' 

                ]
            ]
        ],
        12 => [
            'content' => 'Угроза была нейтрализована с помощью резервных систем защиты.',
            'answers' => [
                'end' => [
                    'answer' => 'Завершить сценарий.',
                    'next_scene' => null,
                    'image' => 'images/success.png' 

                ]
            ]
        ],
        13 => [
            'content' => 'Система безопасности была закрыта, и преступник не смог продолжить свои попытки.',
            'answers' => [
                'end' => [
                    'answer' => 'Завершить сценарий.',
                    'next_scene' => null,
                    'image' => 'images/success.png'  
                ]
            ]
        ]
    ]
],
'patrol' => [
    'title' => 'Патрулирование',
    'image' => 'images/patrul.svg',
    'description' => 'Вы патрулируете район. Ваша задача — правильно реагировать на подозрительные ситуации.',
    'scenes' => [
        1 => [
            'content' => 'Вы замечаете подозрительный автомобиль, припаркованный у заброшенного здания. Что будете делать?',
            'answers' => [
                'a' => [
                    'answer' => 'Подойти к автомобилю и проверить документы.',
                    'next_scene' => 2,
                    'image' => 'images/car.svg'
                ],
                'b' => [
                    'answer' => 'Отправить запрос на проверку владельца автомобиля.',
                    'next_scene' => 3,
                    'image' => 'images/base.svg'
                ],
                'c' => [
                    'answer' => 'Отслеживать автомобиль с расстояния.',
                    'next_scene' => 4,
                    'image' => 'images/car3.svg'
                ]
            ]
        ],
        2 => [
            'content' => 'Вы подошли к автомобилю, и он быстро уезжает. Переследовать его или вызвать подкрепление?',
            'answers' => [
                'a' => [
                    'answer' => 'Переследовать автомобиль.',
                    'next_scene' => 5,
                    'image' => 'images/car3.svg'
                ],
                'b' => [
                    'answer' => 'Вызвать подкрепление и следить за автомобилем.',
                    'next_scene' => 6,
                    'image' => 'images/car.svg'
                ],
                'c' => [
                    'answer' => 'Объявить на радио описание автомобиля.',
                    'next_scene' => 7,
                    'image' => 'images/base.svg'
                ]
            ]
        ],
        3 => [
            'content' => 'Проверка показала, что автомобиль числится как украденный. Как будете действовать?',
            'answers' => [
                'a' => [
                    'answer' => 'Попробовать остановить автомобиль.',
                    'next_scene' => 8,
                    'image' => 'images/car.svg'
                ],
                'b' => [
                    'answer' => 'Подготовиться к блокировке дороги.',
                    'next_scene' => 9,
                    'image' => 'images/car.svg'
                ],
                'c' => [
                    'answer' => 'Подождать, пока автомобиль вернется в нужную точку.',
                    'next_scene' => 10,
                    'image' => 'images/car3.svg'
                ]
            ]
        ],
        4 => [
            'content' => 'Вы отслеживаете автомобиль, но он ускоряется. В итоге преступники скрылись.',
            'answers' => [
                'end' => [
                    'answer' => 'Завершить сценарий.',
                    'next_scene' => null,
                    'image' => 'images/unsuccess.png'  

                ]
            ]
        ],
        5 => [
            'content' => 'Подкрепление приехало, и преступники были задержаны. Все в порядке.',
            'answers' => [
                'end' => [
                    'answer' => 'Завершить сценарий.',
                    'next_scene' => null,
                    'image' => 'images/success.png'  

                ]
            ]
        ],
        6 => [
            'content' => 'Вы не успели предупредить подкрепление, но преступники были пойманы позже.',
            'answers' => [
                'end' => [
                    'answer' => 'Завершить сценарий.',
                    'next_scene' => null,
                    'image' => 'images/success.png'  

                ]
            ]
        ],
        7 => [
            'content' => 'Вы сообщили описание автомобиля, но преступники успели сбежать.',
            'answers' => [
                'end' => [
                    'answer' => 'Завершить сценарий.',
                    'next_scene' => null,
                    'image' => 'images/success.png'  

                ]
            ]
        ],
        8 => [
            'content' => 'Автомобиль остановлен, но водитель оказывается вооруженным. Что делать?',
            'answers' => [
                'a' => [
                    'answer' => 'Задержать водителя.',
                    'next_scene' => 11,
                    'image' => 'images/car.svg'
                ],
                'b' => [
                    'answer' => 'Предложить водителю сдаться.',
                    'next_scene' => 12,
                    'image' => 'images/car.svg'
                ]
            ]
        ],
        9 => [
            'content' => 'Вы блокировали дорогу, но преступники открыли огонь.',
            'answers' => [
                'end' => [
                    'answer' => 'Завершить сценарий.',
                    'next_scene' => null,
                    'image' => 'images/unsuccess.png'  

                ]
            ]
        ],
        10 => [
            'content' => 'Автомобиль вернулся, но водитель был в маске и попытался скрыться.',
            'answers' => [
                'end' => [
                    'answer' => 'Завершить сценарий.',
                    'next_scene' => null,
                    'image' => 'images/unsuccess.png'  

                ]
            ]
        ]
    ]
]

                ];
    
    public function handleChoice($scenarioId, $sceneId, Request $request)
    {
        $scenario = $this->scenarios[$scenarioId] ?? null;
        
        if (!$scenario) {
            return abort(404, 'Сценарий не найден');
        }
        
        $scene = $scenario['scenes'][$sceneId] ?? null;
        
        if (!$scene) {
            return abort(404, 'Сцена не найдена');
        }
        
        $choice = $request->input('choice');
        
        if ($choice) {
            if (!isset($scene['answers'][$choice])) {
                return abort(400, 'Неверный выбор');
            }

            $nextSceneId = $scene['answers'][$choice]['next_scene'];
            
            if ($nextSceneId === null) {
                return view('training.end', ['message' => 'Конец сценария']);
            }
            
            $nextScene = $scenario['scenes'][$nextSceneId] ?? null;
        
            if (!$nextScene) {
                return view('training.end', ['message' => 'Конец сценария']);
            }
        
            return view('training.scene', ['scene' => $nextScene, 'scenario' => $scenario, 'sceneId' => $nextSceneId, 'scenarioId' => $scenarioId]);
        }
        
        return view('training.scene', ['scene' => $scene, 'scenario' => $scenario, 'sceneId' => $sceneId, 'scenarioId' => $scenarioId]);
    }

public function startScenario($scenarioId)
{
    $scenario = $this->scenarios[$scenarioId] ?? null;
    
    if (!$scenario) {
        return abort(404, 'Сценарий не найден');
    }
    
    return view('training.start', [
        'scenario' => $scenario, 
        'scenarioId' => $scenarioId, 
        'scenarios' => $this->scenarios 
    ]);
}

    
}
