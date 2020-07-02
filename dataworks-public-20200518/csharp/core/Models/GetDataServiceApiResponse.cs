// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetDataServiceApiResponse : TeaModel {
        [NameInMap("ErrorCode")]
        [Validation(Required=true)]
        public string ErrorCode { get; set; }

        [NameInMap("ErrorMessage")]
        [Validation(Required=true)]
        public string ErrorMessage { get; set; }

        [NameInMap("HttpStatusCode")]
        [Validation(Required=true)]
        public int? HttpStatusCode { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public GetDataServiceApiResponseData Data { get; set; }
        public class GetDataServiceApiResponseData : TeaModel {
            [NameInMap("ApiId")]
            [Validation(Required=true)]
            public long ApiId { get; set; }
            [NameInMap("ApiMode")]
            [Validation(Required=true)]
            public int? ApiMode { get; set; }
            [NameInMap("ApiName")]
            [Validation(Required=true)]
            public string ApiName { get; set; }
            [NameInMap("ApiPath")]
            [Validation(Required=true)]
            public string ApiPath { get; set; }
            [NameInMap("CreatedTime")]
            [Validation(Required=true)]
            public string CreatedTime { get; set; }
            [NameInMap("CreatorId")]
            [Validation(Required=true)]
            public string CreatorId { get; set; }
            [NameInMap("Description")]
            [Validation(Required=true)]
            public string Description { get; set; }
            [NameInMap("GroupId")]
            [Validation(Required=true)]
            public string GroupId { get; set; }
            [NameInMap("ModifiedTime")]
            [Validation(Required=true)]
            public string ModifiedTime { get; set; }
            [NameInMap("OperatorId")]
            [Validation(Required=true)]
            public string OperatorId { get; set; }
            [NameInMap("ProjectId")]
            [Validation(Required=true)]
            public long ProjectId { get; set; }
            [NameInMap("RequestMethod")]
            [Validation(Required=true)]
            public int? RequestMethod { get; set; }
            [NameInMap("ResponseContentType")]
            [Validation(Required=true)]
            public int? ResponseContentType { get; set; }
            [NameInMap("Status")]
            [Validation(Required=true)]
            public int? Status { get; set; }
            [NameInMap("TenantId")]
            [Validation(Required=true)]
            public long TenantId { get; set; }
            [NameInMap("Timeout")]
            [Validation(Required=true)]
            public int? Timeout { get; set; }
            [NameInMap("VisibleRange")]
            [Validation(Required=true)]
            public int? VisibleRange { get; set; }
            [NameInMap("RegistrationDetails")]
            [Validation(Required=true)]
            public GetDataServiceApiResponseDataRegistrationDetails RegistrationDetails { get; set; }
            public class GetDataServiceApiResponseDataRegistrationDetails : TeaModel {
                [NameInMap("FailedResultSample")]
                [Validation(Required=true)]
                public string FailedResultSample { get; set; }

                [NameInMap("ServiceContentType")]
                [Validation(Required=true)]
                public int? ServiceContentType { get; set; }

                [NameInMap("ServiceHost")]
                [Validation(Required=true)]
                public string ServiceHost { get; set; }

                [NameInMap("ServicePath")]
                [Validation(Required=true)]
                public string ServicePath { get; set; }

                [NameInMap("ServiceRequestBodyDescription")]
                [Validation(Required=true)]
                public string ServiceRequestBodyDescription { get; set; }

                [NameInMap("SuccessfulResultSample")]
                [Validation(Required=true)]
                public string SuccessfulResultSample { get; set; }

                [NameInMap("RegistrationErrorCodes")]
                [Validation(Required=true)]
                public List<GetDataServiceApiResponseDataRegistrationDetailsRegistrationErrorCodes> RegistrationErrorCodes { get; set; }
                public class GetDataServiceApiResponseDataRegistrationDetailsRegistrationErrorCodes : TeaModel {
                    [NameInMap("ErrorCode")]
                    [Validation(Required=true)]
                    public string ErrorCode { get; set; }

                    [NameInMap("ErrorMessage")]
                    [Validation(Required=true)]
                    public string ErrorMessage { get; set; }

                    [NameInMap("ErrorSolution")]
                    [Validation(Required=true)]
                    public string ErrorSolution { get; set; }

                }

                [NameInMap("RegistrationRequestParameters")]
                [Validation(Required=true)]
                public List<GetDataServiceApiResponseDataRegistrationDetailsRegistrationRequestParameters> RegistrationRequestParameters { get; set; }
                public class GetDataServiceApiResponseDataRegistrationDetailsRegistrationRequestParameters : TeaModel {
                    [NameInMap("ColumnName")]
                    [Validation(Required=true)]
                    public string ColumnName { get; set; }

                    [NameInMap("DefaultValue")]
                    [Validation(Required=true)]
                    public string DefaultValue { get; set; }

                    [NameInMap("ExampleValue")]
                    [Validation(Required=true)]
                    public string ExampleValue { get; set; }

                    [NameInMap("IsRequiredParameter")]
                    [Validation(Required=true)]
                    public bool? IsRequiredParameter { get; set; }

                    [NameInMap("ParameterDataType")]
                    [Validation(Required=true)]
                    public int? ParameterDataType { get; set; }

                    [NameInMap("ParameterDescription")]
                    [Validation(Required=true)]
                    public string ParameterDescription { get; set; }

                    [NameInMap("ParameterName")]
                    [Validation(Required=true)]
                    public string ParameterName { get; set; }

                    [NameInMap("ParameterOperator")]
                    [Validation(Required=true)]
                    public int? ParameterOperator { get; set; }

                    [NameInMap("ParameterPosition")]
                    [Validation(Required=true)]
                    public int? ParameterPosition { get; set; }

                }

            }
            [NameInMap("ScriptDetails")]
            [Validation(Required=true)]
            public GetDataServiceApiResponseDataScriptDetails ScriptDetails { get; set; }
            public class GetDataServiceApiResponseDataScriptDetails : TeaModel {
                [NameInMap("IsPagedResponse")]
                [Validation(Required=true)]
                public bool? IsPagedResponse { get; set; }

                [NameInMap("Script")]
                [Validation(Required=true)]
                public string Script { get; set; }

                [NameInMap("ScriptRequestParameters")]
                [Validation(Required=true)]
                public List<GetDataServiceApiResponseDataScriptDetailsScriptRequestParameters> ScriptRequestParameters { get; set; }
                public class GetDataServiceApiResponseDataScriptDetailsScriptRequestParameters : TeaModel {
                    [NameInMap("ColumnName")]
                    [Validation(Required=true)]
                    public string ColumnName { get; set; }

                    [NameInMap("DefaultValue")]
                    [Validation(Required=true)]
                    public string DefaultValue { get; set; }

                    [NameInMap("ExampleValue")]
                    [Validation(Required=true)]
                    public string ExampleValue { get; set; }

                    [NameInMap("IsRequiredParameter")]
                    [Validation(Required=true)]
                    public bool? IsRequiredParameter { get; set; }

                    [NameInMap("ParameterDataType")]
                    [Validation(Required=true)]
                    public int? ParameterDataType { get; set; }

                    [NameInMap("ParameterDescription")]
                    [Validation(Required=true)]
                    public string ParameterDescription { get; set; }

                    [NameInMap("ParameterName")]
                    [Validation(Required=true)]
                    public string ParameterName { get; set; }

                    [NameInMap("ParameterOperator")]
                    [Validation(Required=true)]
                    public int? ParameterOperator { get; set; }

                    [NameInMap("ParameterPosition")]
                    [Validation(Required=true)]
                    public int? ParameterPosition { get; set; }

                }

                [NameInMap("ScriptResponseParameters")]
                [Validation(Required=true)]
                public List<GetDataServiceApiResponseDataScriptDetailsScriptResponseParameters> ScriptResponseParameters { get; set; }
                public class GetDataServiceApiResponseDataScriptDetailsScriptResponseParameters : TeaModel {
                    [NameInMap("ColumnName")]
                    [Validation(Required=true)]
                    public string ColumnName { get; set; }

                    [NameInMap("ExampleValue")]
                    [Validation(Required=true)]
                    public string ExampleValue { get; set; }

                    [NameInMap("ParameterDataType")]
                    [Validation(Required=true)]
                    public int? ParameterDataType { get; set; }

                    [NameInMap("ParameterDescription")]
                    [Validation(Required=true)]
                    public string ParameterDescription { get; set; }

                    [NameInMap("ParameterName")]
                    [Validation(Required=true)]
                    public string ParameterName { get; set; }

                }

                [NameInMap("ScriptConnection")]
                [Validation(Required=true)]
                public GetDataServiceApiResponseDataScriptDetailsScriptConnection ScriptConnection { get; set; }
                public class GetDataServiceApiResponseDataScriptDetailsScriptConnection : TeaModel {
                    [NameInMap("ConnectionId")]
                    [Validation(Required=true)]
                    public long ConnectionId { get; set; }
                    [NameInMap("TableName")]
                    [Validation(Required=true)]
                    public string TableName { get; set; }
                };

            }
            [NameInMap("WizardDetails")]
            [Validation(Required=true)]
            public GetDataServiceApiResponseDataWizardDetails WizardDetails { get; set; }
            public class GetDataServiceApiResponseDataWizardDetails : TeaModel {
                [NameInMap("IsPagedResponse")]
                [Validation(Required=true)]
                public bool? IsPagedResponse { get; set; }

                [NameInMap("WizardRequestParameters")]
                [Validation(Required=true)]
                public List<GetDataServiceApiResponseDataWizardDetailsWizardRequestParameters> WizardRequestParameters { get; set; }
                public class GetDataServiceApiResponseDataWizardDetailsWizardRequestParameters : TeaModel {
                    [NameInMap("ColumnName")]
                    [Validation(Required=true)]
                    public string ColumnName { get; set; }

                    [NameInMap("DefaultValue")]
                    [Validation(Required=true)]
                    public string DefaultValue { get; set; }

                    [NameInMap("ExampleValue")]
                    [Validation(Required=true)]
                    public string ExampleValue { get; set; }

                    [NameInMap("IsRequiredParameter")]
                    [Validation(Required=true)]
                    public bool? IsRequiredParameter { get; set; }

                    [NameInMap("ParameterDataType")]
                    [Validation(Required=true)]
                    public int? ParameterDataType { get; set; }

                    [NameInMap("ParameterDescription")]
                    [Validation(Required=true)]
                    public string ParameterDescription { get; set; }

                    [NameInMap("ParameterName")]
                    [Validation(Required=true)]
                    public string ParameterName { get; set; }

                    [NameInMap("ParameterOperator")]
                    [Validation(Required=true)]
                    public int? ParameterOperator { get; set; }

                    [NameInMap("ParameterPosition")]
                    [Validation(Required=true)]
                    public int? ParameterPosition { get; set; }

                }

                [NameInMap("WizardResponseParameters")]
                [Validation(Required=true)]
                public List<GetDataServiceApiResponseDataWizardDetailsWizardResponseParameters> WizardResponseParameters { get; set; }
                public class GetDataServiceApiResponseDataWizardDetailsWizardResponseParameters : TeaModel {
                    [NameInMap("ColumnName")]
                    [Validation(Required=true)]
                    public string ColumnName { get; set; }

                    [NameInMap("ExampleValue")]
                    [Validation(Required=true)]
                    public string ExampleValue { get; set; }

                    [NameInMap("ParameterDataType")]
                    [Validation(Required=true)]
                    public int? ParameterDataType { get; set; }

                    [NameInMap("ParameterDescription")]
                    [Validation(Required=true)]
                    public string ParameterDescription { get; set; }

                    [NameInMap("ParameterName")]
                    [Validation(Required=true)]
                    public string ParameterName { get; set; }

                }

                [NameInMap("WizardConnection")]
                [Validation(Required=true)]
                public GetDataServiceApiResponseDataWizardDetailsWizardConnection WizardConnection { get; set; }
                public class GetDataServiceApiResponseDataWizardDetailsWizardConnection : TeaModel {
                    [NameInMap("ConnectionId")]
                    [Validation(Required=true)]
                    public long ConnectionId { get; set; }
                    [NameInMap("TableName")]
                    [Validation(Required=true)]
                    public string TableName { get; set; }
                };

            }
            [NameInMap("Protocols")]
            [Validation(Required=true)]
            public List<string> Protocols { get; set; }
        };

    }

}
