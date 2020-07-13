// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.DAS20200116.Models
{
    public class GetHDMAliyunResourceSyncResultResponse : TeaModel {
        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public string Success { get; set; }

        [NameInMap("Synchro")]
        [Validation(Required=true)]
        public string Synchro { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public GetHDMAliyunResourceSyncResultResponseData Data { get; set; }
        public class GetHDMAliyunResourceSyncResultResponseData : TeaModel {
            [NameInMap("SyncStatus")]
            [Validation(Required=true)]
            public string SyncStatus { get; set; }
            [NameInMap("ErrorMsg")]
            [Validation(Required=true)]
            public string ErrorMsg { get; set; }
            [NameInMap("Results")]
            [Validation(Required=true)]
            public string Results { get; set; }
            [NameInMap("SubResults")]
            [Validation(Required=true)]
            public GetHDMAliyunResourceSyncResultResponseDataSubResults SubResults { get; set; }
            public class GetHDMAliyunResourceSyncResultResponseDataSubResults : TeaModel {
                [NameInMap("ResourceSyncSubResult")]
                [Validation(Required=true)]
                public List<GetHDMAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult> ResourceSyncSubResult { get; set; }
                public class GetHDMAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult : TeaModel {
                    [NameInMap("ResourceType")]
                    [Validation(Required=true)]
                    public string ResourceType { get; set; }

                    [NameInMap("SyncCount")]
                    [Validation(Required=true)]
                    public int? SyncCount { get; set; }

                    [NameInMap("Success")]
                    [Validation(Required=true)]
                    public bool? Success { get; set; }

                    [NameInMap("ErrMsg")]
                    [Validation(Required=true)]
                    public string ErrMsg { get; set; }

                }

            }
        };

    }

}
