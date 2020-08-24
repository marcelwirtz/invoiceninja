<?php

namespace App\Http\Controllers;

use App\Filters\SystemLogFilters;
use App\Models\SystemLog;
use App\Transformers\SystemLogTransformer;
use App\Utils\Traits\MakesHash;
use Illuminate\Http\Request;

class SystemLogController extends Controller
{

    use MakesHash;

    protected $entity_type = SystemLog::class;

    protected $entity_transformer = SystemLogTransformer::class;

    /**
     * Show the list of Invoices
     *
     * @param      \App\Filters\InvoiceFilters  $filters  The filters
     *
     * @return \Illuminate\Http\Response
     *
     * @OA\Get(
     *      path="/api/v1/system_logs",
     *      operationId="getSystemLogs",
     *      tags={"system_logs"},
     *      summary="Gets a list of system logs",
     *      description="Lists system logs, search and filters allow fine grained lists to be generated.
     *
     *      Query parameters can be added to performed more fine grained filtering of the system logs, these are handled by the SystemLogFilters class which defines the methods available",
     *      @OA\Parameter(ref="#/components/parameters/X-Api-Secret"),
     *      @OA\Parameter(ref="#/components/parameters/X-Api-Token"),
     *      @OA\Parameter(ref="#/components/parameters/X-Requested-With"),
     *      @OA\Parameter(ref="#/components/parameters/include"),
     *      @OA\Response(
     *          response=200,
     *          description="A list of system logs",
     *          @OA\Header(header="X-MINIMUM-CLIENT-VERSION", ref="#/components/headers/X-MINIMUM-CLIENT-VERSION"),
     *          @OA\Header(header="X-RateLimit-Remaining", ref="#/components/headers/X-RateLimit-Remaining"),
     *          @OA\Header(header="X-RateLimit-Limit", ref="#/components/headers/X-RateLimit-Limit"),
     *          @OA\JsonContent(ref="#/components/schemas/SystemLog"),
     *       ),
     *       @OA\Response(
     *          response=422,
     *          description="Validation error",
     *          @OA\JsonContent(ref="#/components/schemas/ValidationError"),

     *       ),
     *       @OA\Response(
     *           response="default",
     *           description="Unexpected Error",
     *           @OA\JsonContent(ref="#/components/schemas/Error"),
     *       ),
     *     )
     *
     */
    public function index(SystemLogFilters $filters)
    {
        $system_logs = SystemLog::filter($filters);

        return $this->listResponse($system_logs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $error = [
            'message' => 'Cannot create system log',
            'errors' => new \stdClass
        ];


        return response()->json($error, 400);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $error = [
            'message' => 'Cannot store system log',
            'errors' => new \stdClass
        ];


        return response()->json($error, 400);
        
    }

    /**
     * Display the specified resource.
     *
     * @param      \App\Http\Requests\Invoice\ShowInvoiceRequest  $request  The request
     * @param      \App\Models\SystemLog                          $system_logs  The system logs
     *
     * @return \Illuminate\Http\Response
     *
     *
     * @OA\Get(
     *      path="/api/v1/system_logs/{id}",
     *      operationId="showSystemLogs",
     *      tags={"system_logs"},
     *      summary="Shows a system_logs",
     *      description="Displays a system_logs by id",
     *      @OA\Parameter(ref="#/components/parameters/X-Api-Secret"),
     *      @OA\Parameter(ref="#/components/parameters/X-Api-Token"),
     *      @OA\Parameter(ref="#/components/parameters/X-Requested-With"),
     *      @OA\Parameter(ref="#/components/parameters/include"),
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          description="The system_logs Hashed ID",
     *          example="D2J234DFA",
     *          required=true,
     *          @OA\Schema(
     *              type="string",
     *              format="string",
     *          ),
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Returns the system_logs object",
     *          @OA\Header(header="X-MINIMUM-CLIENT-VERSION", ref="#/components/headers/X-MINIMUM-CLIENT-VERSION"),
     *          @OA\Header(header="X-RateLimit-Remaining", ref="#/components/headers/X-RateLimit-Remaining"),
     *          @OA\Header(header="X-RateLimit-Limit", ref="#/components/headers/X-RateLimit-Limit"),
     *          @OA\JsonContent(ref="#/components/schemas/SystemLog"),
     *       ),
     *       @OA\Response(
     *          response=422,
     *          description="Validation error",
     *          @OA\JsonContent(ref="#/components/schemas/ValidationError"),
     *
     *       ),
     *       @OA\Response(
     *           response="default",
     *           description="Unexpected Error",
     *           @OA\JsonContent(ref="#/components/schemas/Error"),
     *       ),
     *     )
     *
     */
    public function show(Request $request, SystemLog $system_log)
    {
        return $this->itemResponse($system_log);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $error = [
            'message' => 'Cannot edit system log',
            'errors' => new \stdClass
        ];


        return response()->json($error, 400);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $error = [
            'message' => 'Cannot update system log',
            'errors' => new \stdClass
        ];


        return response()->json($error, 400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $error = [
            'message' => 'Cannot destroy system log',
            'errors' => new \stdClass
        ];


        return response()->json($error, 400);
    }
}
