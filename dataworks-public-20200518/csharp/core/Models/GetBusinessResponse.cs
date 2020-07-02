// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetBusinessResponse : TeaModel {
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
        public GetBusinessResponseData Data { get; set; }
        public class GetBusinessResponseData : TeaModel {
            [NameInMap("BusinessId")]
            [Validation(Required=true)]
            public long BusinessId { get; set; }
            [NameInMap("BusinessName")]
            [Validation(Required=true)]
            public string BusinessName { get; set; }
            [NameInMap("ProjectId")]
            [Validation(Required=true)]
            public string ProjectId { get; set; }
            [NameInMap("Owner")]
            [Validation(Required=true)]
            public string Owner { get; set; }
            [NameInMap("Description")]
            [Validation(Required=true)]
            public string Description { get; set; }
            [NameInMap("UseType")]
            [Validation(Required=true)]
            public string UseType { get; set; }
        };

    }

}
