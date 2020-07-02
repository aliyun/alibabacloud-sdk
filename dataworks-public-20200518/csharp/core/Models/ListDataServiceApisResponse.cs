// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class ListDataServiceApisResponse : TeaModel {
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
        public ListDataServiceApisResponseData Data { get; set; }
        public class ListDataServiceApisResponseData : TeaModel {
            [NameInMap("PageNumber")]
            [Validation(Required=true)]
            public int? PageNumber { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("Apis")]
            [Validation(Required=true)]
            public List<ListDataServiceApisResponseDataApis> Apis { get; set; }
            public class ListDataServiceApisResponseDataApis : TeaModel {
                    public long ApiId { get; set; }
                    public int? ApiMode { get; set; }
                    public string ApiName { get; set; }
                    public string ApiPath { get; set; }
                    public string CreatedTime { get; set; }
                    public string CreatorId { get; set; }
                    public string Description { get; set; }
                    public string GroupId { get; set; }
                    public string ModifiedTime { get; set; }
                    public string OperatorId { get; set; }
                    public long ProjectId { get; set; }
                    public int? RequestMethod { get; set; }
                    public int? ResponseContentType { get; set; }
                    public int? Status { get; set; }
                    public long TenantId { get; set; }
                    public int? Timeout { get; set; }
                    public int? VisibleRange { get; set; }
                    public ListDataServiceApisResponseDataApisRegistrationDetails RegistrationDetails { get; set; }
                    public class ListDataServiceApisResponseDataApisRegistrationDetails : TeaModel {
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
                        public List<ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationErrorCodes> RegistrationErrorCodes { get; set; }
                        public class ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationErrorCodes : TeaModel {
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
                        public List<ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationRequestParameters> RegistrationRequestParameters { get; set; }
                        public class ListDataServiceApisResponseDataApisRegistrationDetailsRegistrationRequestParameters : TeaModel {
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
                    public ListDataServiceApisResponseDataApisScriptDetails ScriptDetails { get; set; }
                    public class ListDataServiceApisResponseDataApisScriptDetails : TeaModel {
                        [NameInMap("IsPagedResponse")]
                        [Validation(Required=true)]
                        public bool? IsPagedResponse { get; set; }

                        [NameInMap("Script")]
                        [Validation(Required=true)]
                        public string Script { get; set; }

                        [NameInMap("ScriptRequestParameters")]
                        [Validation(Required=true)]
                        public List<ListDataServiceApisResponseDataApisScriptDetailsScriptRequestParameters> ScriptRequestParameters { get; set; }
                        public class ListDataServiceApisResponseDataApisScriptDetailsScriptRequestParameters : TeaModel {
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
                        public List<ListDataServiceApisResponseDataApisScriptDetailsScriptResponseParameters> ScriptResponseParameters { get; set; }
                        public class ListDataServiceApisResponseDataApisScriptDetailsScriptResponseParameters : TeaModel {
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
                        public ListDataServiceApisResponseDataApisScriptDetailsScriptConnection ScriptConnection { get; set; }
                        public class ListDataServiceApisResponseDataApisScriptDetailsScriptConnection : TeaModel {
                            [NameInMap("ConnectionId")]
                            [Validation(Required=true)]
                            public long ConnectionId { get; set; }
                            [NameInMap("TableName")]
                            [Validation(Required=true)]
                            public string TableName { get; set; }
                        };

                    }
                    public ListDataServiceApisResponseDataApisWizardDetails WizardDetails { get; set; }
                    public class ListDataServiceApisResponseDataApisWizardDetails : TeaModel {
                        [NameInMap("IsPagedResponse")]
                        [Validation(Required=true)]
                        public bool? IsPagedResponse { get; set; }

                        [NameInMap("WizardRequestParameters")]
                        [Validation(Required=true)]
                        public List<ListDataServiceApisResponseDataApisWizardDetailsWizardRequestParameters> WizardRequestParameters { get; set; }
                        public class ListDataServiceApisResponseDataApisWizardDetailsWizardRequestParameters : TeaModel {
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
                        public List<ListDataServiceApisResponseDataApisWizardDetailsWizardResponseParameters> WizardResponseParameters { get; set; }
                        public class ListDataServiceApisResponseDataApisWizardDetailsWizardResponseParameters : TeaModel {
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
                        public ListDataServiceApisResponseDataApisWizardDetailsWizardConnection WizardConnection { get; set; }
                        public class ListDataServiceApisResponseDataApisWizardDetailsWizardConnection : TeaModel {
                            [NameInMap("ConnectionId")]
                            [Validation(Required=true)]
                            public long ConnectionId { get; set; }
                            [NameInMap("TableName")]
                            [Validation(Required=true)]
                            public string TableName { get; set; }
                        };

                    }
                    public List<string> Protocols { get; set; }
            }
        };

    }

}
