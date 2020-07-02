// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetDataServiceApplicationResponse : TeaModel {
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
        public GetDataServiceApplicationResponseData Data { get; set; }
        public class GetDataServiceApplicationResponseData : TeaModel {
            [NameInMap("ApplicationCode")]
            [Validation(Required=true)]
            public string ApplicationCode { get; set; }
            [NameInMap("ApplicationId")]
            [Validation(Required=true)]
            public long ApplicationId { get; set; }
            [NameInMap("ApplicationKey")]
            [Validation(Required=true)]
            public string ApplicationKey { get; set; }
            [NameInMap("ApplicationName")]
            [Validation(Required=true)]
            public string ApplicationName { get; set; }
            [NameInMap("ApplicationSecret")]
            [Validation(Required=true)]
            public string ApplicationSecret { get; set; }
            [NameInMap("ProjectId")]
            [Validation(Required=true)]
            public long ProjectId { get; set; }
        };

    }

}
