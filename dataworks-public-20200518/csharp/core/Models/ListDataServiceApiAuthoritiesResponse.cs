// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class ListDataServiceApiAuthoritiesResponse : TeaModel {
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
        public ListDataServiceApiAuthoritiesResponseData Data { get; set; }
        public class ListDataServiceApiAuthoritiesResponseData : TeaModel {
            [NameInMap("PageNumber")]
            [Validation(Required=true)]
            public int? PageNumber { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("ApiAuthorizationList")]
            [Validation(Required=true)]
            public List<ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList> ApiAuthorizationList { get; set; }
            public class ListDataServiceApiAuthoritiesResponseDataApiAuthorizationList : TeaModel {
                    public long ApiId { get; set; }
                    public string ApiName { get; set; }
                    public string ApiPath { get; set; }
                    public int? ApiStatus { get; set; }
                    public string CreatedTime { get; set; }
                    public string CreatorId { get; set; }
                    public string GroupId { get; set; }
                    public string ModifiedTime { get; set; }
                    public long ProjectId { get; set; }
                    public long TenantId { get; set; }
                    public List<ListDataServiceApiAuthoritiesResponseDataApiAuthorizationListAuthorizationRecords> AuthorizationRecords { get; set; }
                    public class ListDataServiceApiAuthoritiesResponseDataApiAuthorizationListAuthorizationRecords : TeaModel {
                            public string CreatedTime { get; set; }
                            public string CreatorId { get; set; }
                            public string EndTime { get; set; }
                            public long ProjectId { get; set; }
                    }
            }
        };

    }

}
