// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Facebody.Models
{
    public class ListFacesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public ListFacesResponseData Data { get; set; }
        public class ListFacesResponseData : TeaModel {
            [NameInMap("ScrollId")]
            [Validation(Required=true)]
            public string ScrollId { get; set; }
            [NameInMap("FaceList")]
            [Validation(Required=true)]
            public List<ListFacesResponseDataFaceList> FaceList { get; set; }
            public class ListFacesResponseDataFaceList : TeaModel {
                    public string FaceId { get; set; }
                    public string ExtraData { get; set; }
                    public string EntityId { get; set; }
                    public string ImageUrl { get; set; }
            }
        };

    }

}
