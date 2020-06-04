// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vcs20200515.Models
{
    public class GetInventoryResponse : TeaModel {
        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public GetInventoryResponseData Data { get; set; }
        public class GetInventoryResponseData : TeaModel {
            [NameInMap("ResultObject")]
            [Validation(Required=true)]
            public List<GetInventoryResponseDataResultObject> ResultObject { get; set; }
            public class GetInventoryResponseDataResultObject : TeaModel {
                    public string BuyerId { get; set; }
                    public string CommodityCode { get; set; }
                    public string CurrentInventory { get; set; }
                    public string ValidEndTime { get; set; }
                    public string ValidStartTime { get; set; }
                    public string InstanceId { get; set; }
                    public string InventoryId { get; set; }
            }
        };

    }

}
