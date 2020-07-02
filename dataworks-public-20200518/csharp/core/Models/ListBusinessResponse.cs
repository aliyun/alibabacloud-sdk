// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class ListBusinessResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("ErrorCode")]
        [Validation(Required=true)]
        public string ErrorCode { get; set; }

        [NameInMap("ErrorMessage")]
        [Validation(Required=true)]
        public string ErrorMessage { get; set; }

        [NameInMap("HttpStatusCode")]
        [Validation(Required=true)]
        public int? HttpStatusCode { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public ListBusinessResponseData Data { get; set; }
        public class ListBusinessResponseData : TeaModel {
            [NameInMap("PageNumber")]
            [Validation(Required=true)]
            public int? PageNumber { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("Business")]
            [Validation(Required=true)]
            public List<ListBusinessResponseDataBusiness> Business { get; set; }
            public class ListBusinessResponseDataBusiness : TeaModel {
                    public long BusinessId { get; set; }
                    public string BusinessName { get; set; }
                    public long ProjectId { get; set; }
                    public string Owner { get; set; }
                    public string Description { get; set; }
                    public string UseType { get; set; }
            }
        };

    }

}
